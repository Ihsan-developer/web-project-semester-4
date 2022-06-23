<?php

namespace App\Controllers;

use App\Models\CakeModel;

class CakeController extends BaseController
{
    public function __construct()
    {

        $this->model = new CakeModel();
    }


    public function home()
    {

        return view('homepage/homepage');
    }

    public function cake()
    {

        return view('kue/cake');
    }

    public function data_cake()
    {

        $cake = array(
            'cake' => $this->model->findAll(),
        );

        return view('kue/cake', $cake);
    }

    public function tambahCabang()
    {
        return view('tambah_cabang');
    }

    public function simpanCabang()
    {

        $cabang = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
        );

        $this->model->insert($cabang);

        return redirect()->to(base_url('data-cabang'));
    }

    public function editCabang($id)
    {

        $cabang = array(
            'cabang' => $this->model->find($id),
        );
        return view('edit_cabang', $cabang);
    }

    public function updateCabang($id)
    {

        $cabang = array(
            'num' => $this->request->getVar('num'),
            'name' => $this->request->getVar('name'),
            'lokasi' => $this->request->getVar('lokasi'),
        );
        $this->model->update($id, $cabang);

        return redirect()->to(base_url('data-cabang'));
    }

    public function deleteCabang($id)
    {

        $this->model->delete($id);
        return redirect()->to(base_url('data-cabang'));
    }
}