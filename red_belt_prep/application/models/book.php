<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Model
{
	function get_last_three_reviews()
	{
		return $this->db->query("SELECT users.id AS user_id, users.first_name, review, ratings, reviews.created_at AS review_created_at, books.title, books.id AS book_id
								 FROM users JOIN reviews ON users.id = reviews.user_id
								 JOIN books ON books.id = reviews.book_id
								 ORDER BY reviews.created_at DESC
								 LIMIT 3;")->result_array();
	}

	function get_all_books()
	{
		return $this->db->query("SELECT id, title FROM books")->result_array();
	}

	function get_authors()
	{
		return $this->db->query("SELECT author_first, author_last FROM books;")->result_array();
	}

	function add_review($book)
	{
		date_default_timezone_set('America/Los_Angeles');
		$this->load->library('form_validation');

		$this->form_validation->set_rules("book_title", "Book Title", "trim|required");
		
		if(empty($book["author_list"]) && empty($book['new_author']))
			$this->form_validation->set_rules("new_author", "New Author", "trim|required");
		
		$this->form_validation->set_rules("review", "Review", "required");

		if($this->form_validation->run() === false)
			$result = validation_errors();
		else
		{
			// determine which author name field to use
			if(empty($book['new_author']))
				$author = $book['author_list'];
			else
				$author = $book['new_author'];

			// determine if author name includes a last name
			if(strpos($author, " "))
			{
				$author_first = substr($author, 0, strpos($author, " "));
				$author_last = substr($author, strpos($author, " ")+1);
			}
			else
			{
				$author_first = $author;
				$author_last = "";
			}

			$book['created_at'] = date("Y-m-d, H:i:s");
			
			$book_exists = $this->db->query("SELECT * FROM books 
					  WHERE title = '{$book['book_title']}' 
					  AND author_first = '{$author_first}' 
					  AND author_last = '{$author_last}';")->row_array();

			// Add new book with author to book table
			if(!empty($book['new_author']) && empty($book_exists))
			{
				$result = $this->db->query("INSERT INTO books (title, author_first, author_last, created_at)
											VALUES ('{$book['book_title']}', '{$author_first}', '{$author_last}', '{$book['created_at']}');");
				$book_id = $this->db->insert_id();
			}
			else
			{
				$book_id = $book_exists['id'];
				$result = true;
			}

			if($result)
			{
				$book['review'] = addslashes($book['review']);
				$user_id = $this->session->userdata('user_id');
				$result = $this->db->query("INSERT INTO reviews (user_id, book_id, review, ratings, created_at)
											VALUES ($user_id, $book_id, '{$book['review']}', {$book['rating']}, '{$book['created_at']}');");
				
				$result = ($result) ? (int)$book_id : "Review failed to be added!";
			}
			else
				$result = "Review failed to be added!";
		}

		return $result;
	}

	function get_book_info($book_id)
	{
		return $this->db->query("SELECT id, title, CONCAT(author_first, ' ', author_last) as authors_name 
								 FROM books 
								 WHERE id=$book_id;")->row_array();
	}

	function get_book_reviews($book_id)
	{
		return $this->db->query("SELECT users.id AS user_id, users.first_name, review, ratings, reviews.created_at AS review_created_at
								 FROM users JOIN reviews ON users.id = reviews.user_id
								 WHERE reviews.book_id = $book_id;")->result_array();
	}
}

//end of book model