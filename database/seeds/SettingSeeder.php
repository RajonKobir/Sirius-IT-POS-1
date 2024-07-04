<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id' => 1,
                'email' => 'siriusitconsultancy@gmail.com',
                'currency_id' => 1,
                'client_id' => Null,
                'invoice_footer' => Null,
                'warehouse_id' => Null,
                'CompanyName' => 'Sirius IT Consultancy',
                'CompanyPhone' => '01750988184',
                'CompanyAdress' => 'Kushtia, Bangladesh',
                'footer' => 'Sirius IT Consultancy - POS with Inventory Management',
                'developed_by' => 'Sirius IT Consultancy',
                'app_name' => 'Sirius IT Consultancy',
                'logo' => 'logo-default.svg',
                'default_sms_gateway' => 'twilio',
                'default_language' => 'en',
                'symbol_placement' => 'before',
            )
            
        );
    }
}
