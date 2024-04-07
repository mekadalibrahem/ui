<?php 

namespace Mekadalibrahem\Ui\Tests\Unit ;

use Illuminate\Support\Facades\Artisan;
use Mekadalibrahem\Ui\Tests\TestCase ;

class InstallCommandTest extends TestCase 
{
    public function test_install_command(){
        $this->assertEquals(Artisan::call('ui:install'),0);
    }
}

