<?php

class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name'=>'Carlos Vesga',
            'email'=>'carlos.vesga30@gmail.com',
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Carlos Vesga')
             ->see('carlos.vesga30@gmail.com');
    }
}
