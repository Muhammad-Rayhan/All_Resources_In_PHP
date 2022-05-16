<?php
class Crud extends CI_Controller{
    public function index()
    {
        $this->load->model('crud_model');
        $data['product_details'] = $this->crud_model->getAllProduct();

        $this->load->view('crud_view', $data);
    }

    public function addProduct()
    {
        //At first $autoload['libraries'] = array('form_validation'); form_validation set kore dite hobe autoload.php file a.

        // $this->form_validation()->set_rules('name','Enter Product name!','trim|required');  //set_rules('name[Input tag name value]', 'Enter Product name![Show error messeage]', 'trim[Type of validation]')


        $this->load->model('crud_model');
        $this->crud_model->insertproduct([
            'product_name' => $this->input->post('name'),
            'product_price' => $this->input->post('price'),
            'product_quantity' => $this->input->post('quantity')
        ]);
        redirect(base_url('crud'));
    }

    public function editProduct($id)
    {
        $this->load->model('crud_model');
        $data['singleProduct'] = $this->crud_model->getsingleProduct($id);

        $this->load->view('edit_view', $data);
    }

    public function update($id)
    {
        $this->load->model('crud_model');
        $data = array(

            'product_name' => $this->input->post('name'),
            'product_price' => $this->input->post('price'),
            'product_quantity' => $this->input->post('quantity')
        );
        $update_success = $this->crud_model->update($data, $id);
        redirect(base_url('crud'));
        // if ($update_success != false) {
        //     $_session['message'] = 'Update Successfully';
        //     redirect(base_url('crud'));
        // } else {
        //     $_session['message'] = 'Update Unsuccessfully';
        //     redirect(base_url('crud'));
        // }
    }

    public function deleteProduct($id){
        $this->load->model('crud_model');
        $this->crud_model->delete($id);
        redirect(base_url('crud'));
    }
}


//Route > Controller > Model