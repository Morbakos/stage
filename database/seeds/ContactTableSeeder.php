<?php

use Illuminate\Database\Seeder;

use App\Contact;

class ContactTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 250; $i++) {
            $contact = new Contact;
            $contact->civilite = $faker->boolean;
            $contact->prenom = $faker->firstName;
            $contact->nom = $faker->lastName;
            $contact->tel = $faker->unique()->mobileNumber;
            $contact->email = $faker->unique()->email;
            $contact->societe = $faker->company;
            $contact->ville = $faker->city;
            $contact->save();
        }
    }
}