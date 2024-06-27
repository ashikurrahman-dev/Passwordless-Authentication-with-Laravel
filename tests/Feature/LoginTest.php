<?php
uses(Illuminate\Foundation\Testing\RefreshDatabase::class);
it('ensure the email address is valid', function(){
    $this->post('auth/login',[
        'email' => 'nope'
    ])->assertSessionHasErrors(['email']);
});

it('ensure the email address exist', function(){
    $this->post('auth/login',[
        'email' => 'john@gmail.com'
    ])->assertSessionHasErrors(['email']);
});