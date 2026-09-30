<?php
class Home extends Controller
{
    public function index(): void
    {
        $data = [
            'judul' => 'Fondasi MVC DPWL',
            'pesan' => 'Request telah melewati front controller, Router, Controller, dan View.'
        ];
        $this->view('home/index', $data);
    }

    public function info(string $topik = 'mvc'): void
    {
        $this->view('home/info', ['topik' => $topik]);
    }

    public function perpus(string $id = '2522500027'): void
    {
        $data = [
            'title' => 'Detail Perpus',
            'id'   => $id,
            'nama'  => 'Imam Rafif ',
            'kelas' => 'SI3A'
        ];

        $this->view('home/perpus', $data);
    }
}