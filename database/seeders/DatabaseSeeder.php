<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(2)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

     
        \App\Models\Ville::create([
            'ville_name' => 'Casablanca',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Rabat',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Marrakech',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Fes',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Tangier',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Agadir',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Meknes',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Oujda',
        ]);
    
            \App\Models\Ville::create([
            'ville_name' => 'Kenitra',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Tetouan',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Sale',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Temara',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Nador',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Safi',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'El Jadida',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Beni Mellal',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Taza',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Khouribga',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Mohammedia',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Fes',
        ]);
    
        \App\Models\Ville::create([
            'ville_name' => 'Meknes',
        ]);
        \App\Models\Ville::create([
            'ville_name' => 'Errachidia',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Taroudant',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Ouarzazate',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Larache',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Sidi Ifni',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Tiznit',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Tetouan',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Chefchaouen',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Essaouira',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Al Hoceima',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'El Kelaa des Sraghna',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Guercif',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Taourirt',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Sefrou',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Berrechid',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Asilah',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Khemisset',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Taounate',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Ouezzane',
        ]);
    
        
        \App\Models\Ville::create([
            'ville_name' => 'Sidi Bennour',
        ]);
            \App\Models\Categorie::create( [
                'id'=>1,
                'code_cat'=>'T001',
                'libelle'=>'Immobilier',
                'created_at'=>'2023-06-21 20:39:13',
                'updated_at'=>'2023-06-21 20:39:13'
                ] );
                
                
                            
                \App\Models\Categorie::create( [
                'id'=>2,
                'code_cat'=>'M001',
                'libelle'=>'Electronique',
                'created_at'=>'2023-06-21 19:39:13',
                'updated_at'=>'2023-06-21 19:39:13'
                ] );
                
                
                            
                \App\Models\Categorie::create( [
                'id'=>3,
                'code_cat'=>'V001',
                'libelle'=>'Voiture',
                'created_at'=>'2023-06-21 19:39:13',
                'updated_at'=>'2023-06-21 19:39:13'
                ] );
                
                
                            
                \App\Models\Categorie::create( [
                'id'=>4,
                'code_cat'=>'M002',
                'libelle'=>'Moto',
                'created_at'=>'2023-06-21 19:39:13',
                'updated_at'=>'2023-06-21 19:39:13'
                ] ); 

                
		        \App\Models\User::create([
                    'name' => 'Mohamed',
                    'email' => 'admin@example.com',
                    'password' => bcrypt('password'),
                    'role' => 1,
                ]);
        
        
                        \App\Models\User::create([
                    'name' => 'Mohamed',
                    'email' => 'mohamed1@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                        \App\Models\User::create([
                    'name' => 'Fatima',
                    'email' => 'fatima2@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                        \App\Models\User::create([
                    'name' => 'Ahmed',
                    'email' => 'ahmed3@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                        \App\Models\User::create([
                    'name' => 'Amina',
                    'email' => 'amina4@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                        \App\Models\User::create([
                    'name' => 'Youssef',
                    'email' => 'youssef5@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
                
                \App\Models\User::create([
                    'name' => 'Hassan',
                    'email' => 'hassan51@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Zahra',
                    'email' => 'zahra52@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Ali',
                    'email' => 'ali53@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Nadia',
                    'email' => 'nadia54@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Omar',
                    'email' => 'omar55@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Saida',
                    'email' => 'saida56@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Abdellah',
                    'email' => 'abdellah57@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Laila',
                    'email' => 'laila58@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Karim',
                    'email' => 'karim59@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Houda',
                    'email' => 'houda60@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
                \App\Models\User::create([
                    'name' => 'Fatima',
                    'email' => 'fatima61@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Youssef',
                    'email' => 'youssef62@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Amina',
                    'email' => 'amina63@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Khalid',
                    'email' => 'khalid64@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Samira',
                    'email' => 'samira65@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Mehdi',
                    'email' => 'mehdi66@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Naima',
                    'email' => 'naima67@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Brahim',
                    'email' => 'brahim68@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Aicha',
                    'email' => 'aicha69@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Mustapha',
                    'email' => 'mustapha70@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                \App\Models\User::create([
                    'name' => 'Karim',
                    'email' => 'karim71@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Sara',
                    'email' => 'sara72@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Mohammed',
                    'email' => 'mohammed73@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Rajaa',
                    'email' => 'rajaa74@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Abdellah',
                    'email' => 'abdellah75@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Nadia',
                    'email' => 'nadia76@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Kamal',
                    'email' => 'kamal77@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Amina',
                    'email' => 'amina78@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Hassan',
                    'email' => 'hassan79@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Zineb',
                    'email' => 'zineb80@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Younes',
                    'email' => 'younes81@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Hafsa',
                    'email' => 'hafsa82@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Ahmed',
                    'email' => 'ahmed83@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Souad',
                    'email' => 'souad84@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Khalid',
                    'email' => 'khalid85@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Meryem',
                    'email' => 'meryem86@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Hicham',
                    'email' => 'hicham87@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Salma',
                    'email' => 'salma88@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Omar',
                    'email' => 'omar89@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Amina',
                    'email' => 'amina90@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
                \App\Models\User::create([
                    'name' => 'Fatima',
                    'email' => 'fatima51@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Hassan',
                    'email' => 'hassan52@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Zahra',
                    'email' => 'zahra53@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Mehdi',
                    'email' => 'mehdi54@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Khadija',
                    'email' => 'khadija55@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Said',
                    'email' => 'said56@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Zainab',
                    'email' => 'zainab57@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Abdelali',
                    'email' => 'abdelali58@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Nabil',
                    'email' => 'nabil59@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Aicha',
                    'email' => 'aicha60@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Khalid',
                    'email' => 'khalid61@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Sanaa',
                    'email' => 'sanaa62@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Mustapha',
                    'email' => 'mustapha63@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Nora',
                    'email' => 'nora64@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Yassine',
                    'email' => 'yassine65@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Loubna',
                    'email' => 'loubna66@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Abderrahmane',
                    'email' => 'abderrahmane67@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Hajar',
                    'email' => 'hajar68@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Youssef',
                    'email' => 'youssef69@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
        
                
                \App\Models\User::create([
                    'name' => 'Samira',
                    'email' => 'samira70@example.com',
                    'password' => bcrypt('password'),
                    'role' => 2,
                ]);
   
    }
}
