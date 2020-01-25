<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    protected $nameList = [
        'Ada', 'Adela', 'Adrijana', 'Afrodita', 'Aida', 'Aila', 'Aina', 'Aleksandra', 'Alekseja', 'Alena', 'Alisa', 'Amelija', 'Ana', 'Anabela', 'Anastasija', 'Andrijana', 'Aneta', 'Angelina', 'Anica', 'Anita', 'Anja', 'Anka',
        'Ankica', 'Antonina', 'Anđela', 'Anđelija', 'Anđelina', 'Anđelka', 'Ava',
        'Biljana', 'Bisera', 'Blaga', 'Boba', 'Bogdana', 'Bogdanka', 'Bojana', 'Borislava', 'Borka', 'Božana', 'Branislava', 'Branka', 'Brankica',
        'Valentina', 'Vera', 'Vesela', 'Vesna', 'Vida', 'Viktorija', 'Violeta', 'Višnja', 'Vladana', 'Vladislava', 'Vlatka', 'Vojislava', 'Vuka', 'Vukana', 'Vukica',
        'Gabrijela', 'Gala', 'Georgina', 'Gorana', 'Gordana', 'Gorica', 'Gospava',
        'Daca', 'Dana', 'Danica', 'Danijela', 'Danka', 'Dara', 'Darija', 'Darina', 'Darinka', 'Darka', 'Deana', 'Dejana',
        'Desa', 'Desanka', 'Diana', 'Dina', 'Divna', 'Dmitra', 'Dora', 'Doris', 'Dorotea', 'Draga', 'Dragana', 'Dragica', 'Drina', 'Dubravka', 'Dunja', 'Dušica', 'Duška',
        'Đurđa', 'Đurđina',
        'Ekaterina', 'Elena', 'Ema', 'Ena', 'Emilija', 'Eva',
        'Žaklina', 'Žana', 'Žanka', 'Željka', 'Živana',
        'Zlata', 'Zlatana', 'Zora', 'Zorana', 'Zorica',
        'Ina', 'Irena', 'Irina', 'Isidora', 'Iva', 'Ivana', 'Ivanka', 'Ivona',
        'Jana', 'Janja', 'Jeka', 'Jela', 'Jelena', 'Jelica', 'Jelisaveta', 'Jovana', 'Julija', 'Julijana',
        'Kaća', 'Kaja', 'Kalina', 'Kata', 'Katarina', 'Katica', 'Krasna', 'Kristina', 'Kruna', 'Ksenija',
        'Lana', 'Lara', 'Lea', 'Lejla', 'Lela', 'Lena', 'Lenka', 'Lidija', 'Lilijana', 'Luna',
        'Ljiljana', 'Ljubica', 'Ljupka',
        'Madlena', 'Magdalena', 'Maja', 'Majda', 'Mara', 'Margarita', 'Margita', 'Marica', 'Marija', 'Marina', 'Marta', 'Martina', 'Maša', 'Mia', 'Mila', 'Milana',
        'Milena', 'Milica', 'Milijana', 'Miljana', 'Milka', 'Milkica', 'Miluna', 'Mina', 'Mirjana', 'Mirka', 'Mirna', 'Miroslava', 'Mitra', 'Mlađana', 'Momira',
        'Nada', 'Najda', 'Narandža', 'Nasta', 'Natalija', 'Nataša', 'Nađa', 'Neda', 'Neva', 'Nikoleta', 'Nikolija', 'Nikolina', 'Nina', 'Novka',
        'Ognjana', 'Ognjenka', 'Olga', 'Olivera', 'Olja', 'Olgica',
        'Paula', 'Paulina', 'Pava', 'Persa', 'Persida', 'Petka', 'Petra', 'Petrija',
        'Rada', 'Radana', 'Radmila', 'Rajka', 'Ranka', 'Roksanda', 'Rosa', 'Ruža', 'Ružica',
        'Sanda', 'Sandra', 'Sanja', 'Sara', 'Selena', 'Sena', 'Senka', 'Severina', 'Silvana',
        'Silvija', 'Simona', 'Slađana', 'Sofija', 'Soka', 'Sonja', 'Spasa', 'Srna', 'Stana', 'Stanija', 'Staša', 'Stefana', 'Sunčica',
        'Tamara', 'Tanja', 'Tara', 'Tatjana', 'Tea', 'Teodora', 'Tijana', 'Tina',
        'Una',
        'Hana', 'Hristina',
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
