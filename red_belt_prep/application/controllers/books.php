<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('users.php');

class Books extends Users {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->user_info['page'] = "books_home";
		$this->load->model('book');
		$this->user_info['book_reviews'] = $this->book->get_last_three_reviews();
		$this->user_info['book_list'] = $this->book->get_all_books();
		
		$this->load->view('book_home', $this->user_info);
	}

	public function add()
	{
		$this->load->model('book');
		$this->user_info['authors'] = $this->book->get_authors();
		$this->user_info['page'] = "";
		
		$this->load->view('add', $this->user_info);
	}

	public function add_review()
	{
		$this->load->model('book');
		$book_result = $this->book->add_review($this->input->post(NULL, true));

		if(gettype($book_result) == "string")
		{
			$this->session->set_flashdata("book_error", $book_result);
			redirect('/books/add');
		}
		else
		{
			redirect('/books');
		}
	}

	public function book_review($book_id)
	{
		$this->load->model('book');
		$book_info = $this->book->get_book_info($book_id);
		$book_reviews = $this->book->get_book_reviews($book_info['id']);

		$this->user_info['book_reviews'] = $book_reviews;
		$this->user_info['book_info'] = $book_info;
		$this->user_info['page'] = "";

		$this->load->view('book_review', $this->user_info);
	}

}

//end of books controller