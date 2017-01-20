<?php

use App\Permission;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy


class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $createInvoice = new Permission();
        $createInvoice->name = 'create-invoice';
        $createInvoice->display_name = 'create Invoice';
        $createInvoice->description = 'create new blog';
        $createInvoice->save(); 

        $editInvoice = new Permission();
        $editInvoice->name = 'edit-invoice';
        $editInvoice->display_name = 'Edit Invoice';
        $editInvoice->description = 'edit new blog';
        $editInvoice->save(); 

        $deleteInvoice = new Permission();
        $deleteInvoice->name = 'delete-invoice';
        $deleteInvoice->display_name = 'delete Invoice';
        $deleteInvoice->description = 'delete new blog';
        $deleteInvoice->save();
      }
}
