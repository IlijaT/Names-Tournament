<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    protected $nameList = [
        'Adrijana', 'Afrodita', 'Aleksandra', 'Alisa', 'Amelija', 'Ana', 'Anastasija', 'Anamarija', 'Anita', 'Anja', 'Anika', 'Anka',
        'Anđela', 'Anđelina',
        'Biljana', 'Bogdana',
        'Valentina', 'Vera', 'Vesna', 'Vida', 'Violeta', 'Vladana', 'Vladislava', 'Vlatka', 'Vojislava',
        'Gorana', 'Gordana', 'Gorica', 'Gospava',
        'Danica', 'Danijela', 'Darija', 'Darinka', 'Dejana',
        'Desanka', 'Divna', 'Dmitra', 'Dora', 'Doris', 'Dorotea', 'Dragana', 'Drina', 'Dubravka', 'Dunja', 'Dušica', 'Duška',
        'Đurđa', 'Đurđina',
        'Ekaterina', 'Elena', 'Ema', 'Ena', 'Emilija', 'Eva',
        'Žaklina', 'Željka', 'Živana',
        'Zora', 'Zorana', 'Zorica',
        'Ina', 'Irena', 'Irina', 'Isidora', 'Iva', 'Ivana', 'Ivanka', 'Ivona',
        'Jana', 'Janja', 'Jela', 'Jelena', 'Jelica', 'Jelisaveta', 'Jovana', 'Julija', 'Julijana',
        'Kaća', 'Kaja', 'Kalina', 'Kata', 'Katja', 'Katarina', 'Katica', 'Krasna', 'Kristina', 'Kruna', 'Ksenija',
        'Lana', 'Lara', 'Lea', 'Lejla', 'Lela', 'Lena', 'Lenka', 'Lidija', 'Lilijana',
        'Ljiljana', 'Ljubica', 'Ljupka',
        'Magdalena', 'Maja', 'Mara', 'Marica', 'Marija', 'Marina', 'Marta', 'Martina', 'Maša', 'Mia', 'Mila', 'Miona', 'Milana',
        'Milena', 'Milica', 'Miljana', 'Mina', 'Minja', 'Mirjana', 'Mirka', 'Mirna', 'Mitra', 'Mila',
        'Nada', 'Najda', 'Natalija', 'Nataša', 'Nađa', 'Neda', 'Neva', 'Nikoleta', 'Nikolija', 'Nikolina', 'Nina', 'Novka', 'Nora',
        'Olga', 'Olivera', 'Olja', 'Olgica',
        'Pava', 'Persa', 'Petra', 'Petrija',
        'Radmila', 'Ranka', 'Rosa', 'Ruža', 'Ružica',
        'Sanda', 'Sandra', 'Sanja', 'Sara', 'Senka', 'Severina', 'Silvana',
        'Silvija', 'Simona', 'Slađana', 'Sofija', 'Sonja', 'Staša', 'Stefana', 'Sunčica',
        'Tamara', 'Tanja', 'Tara', 'Tatjana', 'Tea', 'Teodora', 'Tijana', 'Tina',
        'Una',
        'Hana', 'Hristina', 'Helena',
        'Čarna',
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->nameList as $name) {
            factory('App\User')->create(['first_name' => $name, 'last_name' => 'Tatalović']);
        }
    }
}
