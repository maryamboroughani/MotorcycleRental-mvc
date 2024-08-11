<?php
namespace App\Controllers;

use App\Models\Rental;
use App\Providers\View;
use App\Providers\Validator;

class RentalController {
    public function index() {
        $rental = new Rental();
        $rentals = $rental->select(); // Retrieve all rentals
        View::render('rental/index', ['rentals' => $rentals]);
    }

    public function create() {
        View::render('rental/create', ['base' => BASE]);
    }

    public function show($data = []) {
        if (!empty($data['id'])) {
            $rental = new Rental();
            $rentalDetails = $rental->selectId($data['id']);
            if ($rentalDetails) {
                View::render('rental/show', ['rental' => $rentalDetails]);
            } else {
                View::render('error', ['msg' => 'Rental not found!']);
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }

    public function edit($data = []) {
        if (!empty($data['id'])) {
            $rental = new Rental();
            $rentalDetails = $rental->selectId($data['id']);
            if ($rentalDetails) {
                View::render('rental/edit', ['rental' => $rentalDetails]);
            } else {
                View::render('error', ['msg' => 'Rental not found!']);
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }

    public function store($data = []) {
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
            } else {
                View::render('error', ['msg' => 'Failed to create rental.']);
            }
        } else {
            $errors = $validator->getErrors();
            View::render('rental/create', ['errors' => $errors, 'rental' => $data]);
        }
    }

    public function update($data, $get_data) {
        if (!empty($get_data['id'])) {
            $id = $get_data['id'];
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
                } else {
                    View::render('error', ['msg' => 'Failed to update rental.']);
                }
            } else {
                $errors = $validator->getErrors();
                View::render('rental/edit', ['errors' => $errors, 'rental' => $data]);
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }

    public function delete($data) {
        if (!empty($data['id'])) {
            $rental = new Rental();
            $delete = $rental->delete($data['id']);
            if ($delete) {
                View::redirect('rental');
            } else {
                View::render('error', ['msg' => 'Failed to delete rental.']);
            }
        } else {
            View::render('error', ['msg' => 'Invalid rental ID!']);
        }
    }
}
?>
