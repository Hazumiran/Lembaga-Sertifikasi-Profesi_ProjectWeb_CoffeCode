<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class authlogin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('login') != TRUE) {
            return redirect()->to(base_url('/'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here

        if (session()->get('login') == TRUE and session()->get('Level') == 'admin') {
            return redirect()->to(route_to('admin'));
        } elseif (session()->get('login') == TRUE and session()->get('Level') == 'pelanggan')
            return redirect()->to(route_to('pelanggan'));
    }
}
