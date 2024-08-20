<?php

namespace App\Controllers;

use App\Models\Rental;
use App\Providers\View;
use App\Providers\Validator;

class RentalController {
    
    // Display all rentals
    public function index() {
        $rental = new Rental();
        $rentals = $rental->select();
        echo '<pre>'; print_r($rentals); echo '</pre>'; // Debugging
        View::render('rental/index', ['rentals' => $rentals]);
    }
    

    // Show form to create a new rental
    public function create() {
        View::render('rental/create', ['base' => BASE]);
    }

    // Store a new rental
    public function store() {
        $data = $_POST; // Retrieve data from $_POST
        $validator = new Validator();
        $validator->field('motorcycle_id', $data['motorcycle_id'])->required()->numeric();
        $validator->field('user_id', $data['user_id'])->required()->numeric();
        $validator->field('start_date', $data['start_date'])->required();
        $validator->field('end_date', $data['end_date'])->required();
        // Add other validations as needed

        if ($validator->isSuccess()) {
            $rental = new Rental();
            $insert = $rental->insert($data);
            if ($insert) {
                View::redirect('rental/show?id=' . $insert);
                return; // Ensure no further rendering occurs
            } else {
                View::render('error', ['msg' => 'Failed to create rental.']);
                return; // Ensure no further rendering occurs
            }
        } else {
            $errors = $validator->getErrors();
            View::render('rental/create', ['errors' => $errors, 'rental' => $data]);
            return; // Ensure no further rendering occurs
        }
    }

    // Display a specific rental
    public function show() {
        $id = $_GET['id'] ?? null; // Retrieve ID from query string
        if ($id) {
            $rental = new Rental();
            $rentalDetails = $rental->selectId($id);
            if ($rentalDetails) {
                View::render('rental/show', ['rental' => $rentalDetails]);
            } else {
                View::render('error', ['msg' => 'Rental not found!']);
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }

    // Show form to edit a specific rental
    public function edit() {
        $id = $_GET['id'] ?? null; // Retrieve ID from query string
        if ($id) {
            $rental = new Rental();
            $rentalDetails = $rental->selectId($id);
            if ($rentalDetails) {
                View::render('rental/edit', ['rental' => $rentalDetails]);
            } else {
                View::render('error', ['msg' => 'Rental not found!']);
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }

    // Update a specific rental
    public function update() {
        $data = $_POST; // Retrieve data from $_POST
        $id = $_GET['id'] ?? null; // Retrieve ID from query string
        if ($id) {
            $validator = new Validator();
            $validator->field('motorcycle_id', $data['motorcycle_id'])->required()->numeric();
            $validator->field('user_id', $data['user_id'])->required()->numeric();
            $validator->field('start_date', $data['start_date'])->required();
            $validator->field('end_date', $data['end_date'])->required();
            // Add other validations as needed

            if ($validator->isSuccess()) {
                $rental = new Rental();
                $update = $rental->update($data, $id);
                if ($update) {
                    View::redirect('rental/show?id=' . $id);
                    return; // Ensure no further rendering occurs
                } else {
                    View::render('error', ['msg' => 'Failed to update rental.']);
                    return; // Ensure no further rendering occurs
                }
            } else {
                $errors = $validator->getErrors();
                View::render('rental/edit', ['errors' => $errors, 'rental' => $data]);
                return; // Ensure no further rendering occurs
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }

    // Delete a specific rental
    public function delete() {
        $id = $_POST['id'] ?? null; // Retrieve ID from $_POST
        if ($id) {
            $rental = new Rental();
            $delete = $rental->delete($id);
            if ($delete) {
                View::redirect('rental');
                return; // Ensure no further rendering occurs
            } else {
                View::render('error', ['msg' => 'Failed to delete rental.']);
                return; // Ensure no further rendering occurs
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }
}
