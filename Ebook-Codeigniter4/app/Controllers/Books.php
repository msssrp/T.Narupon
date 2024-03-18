<?php namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class Books extends BaseController
{
    public function index()
    {
        return view('add_book');
    }

    public function addBook()
    {
        $model = new BookModel();

        $coverImage = $this->request->getFile('cover_image');
        if ($coverImage->isValid() && !$coverImage->hasMoved()) {
            $coverImageName = $coverImage->getRandomName();
            $coverImage->move('uploads', $coverImageName);
        }

        $bookFile = $this->request->getFile('book_file');
        if ($bookFile->isValid() && !$bookFile->hasMoved()) {
            $bookFileName = $bookFile->getRandomName();
            $bookFile->move('uploads', $bookFileName);
        }

        $model->save([
            'title' => $this->request->getVar('title'),
            'category' => $this->request->getVar('category'),
            'isbn' => $this->request->getVar('isbn'),
            'author' => $this->request->getVar('author'),
            'cover_image' => $coverImageName,
            'book_file' => $bookFileName,
        ]);

        return redirect()->to('/books/list');
    }

    public function listBooks()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();
        
        return view('list_books', $data);
    }

    public function viewBook($id)
    {
        $model = new BookModel();
        $book = $model->find($id);
        
        if ($book) {
            $filePath = 'uploads/' . $book['book_file'];
            if (file_exists($filePath)) {
                return $this->response->download($filePath, null);
            } else {
                return redirect()->to('/books/listBooks')->with('error', 'File not found.');
            }
        } else {
            return redirect()->to('/books/listBooks')->with('error', 'Book not found.');
        }
    }
}