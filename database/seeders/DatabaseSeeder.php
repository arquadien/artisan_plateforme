<?php

namespace Database\Seeders;
use Illuminate\Support\DB;
use App\Models\Metier;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Factorie pour le pré-remplissage des images et la description des métiers 
        
        Metier::factory()->create([
            'domaine' => 'Mécanique',
            'description' => "Confiez vos réparations automobiles à des experts en mécanique qui comprennent l'importance de garder votre véhicule en bon état de fonctionnement. Que ce soit pour une révision régulière, des réparations mécaniques ou une maintenance préventive, nos mécaniciens certifiés sont là pour répondre à tous vos besoins. Grâce à notre application conviviale, vous pouvez facilement planifier des rendez-vous, obtenir des devis transparents et suivre l'avancement de vos réparations en temps réel. Ne laissez pas les problèmes mécaniques  vous ralentir - faites confiance à notre équipe de professionnels pour garder votre voiture sur la route en toute sécurité",
            'image' => 'asset/image/Mecanique3PCT.svg'
        ]
        );

        Metier::factory()->create([
            'domaine' => 'Menuiserie/Charpenterie ',
            'description' => "Transformez votre espace de vie avec des meubles sur mesure conçus par nos artisans menuisiers 
                qualifiés. Que vous souhaitiez créer une bibliothèque élégante, une table à manger unique ou un dressing fonctionnel, 
                nos menuisiers sont là pour donner vie à vos idées. Grâce à notre application conviviale, vous pouvez collaborer étroitement
                avec nos artisans, choisir les matériaux et les finitions qui correspondent à votre style, et suivre chaque étape de la fabrication
                de vos meubles en temps réel. Simplifiez vos projets de menuiserie et créez un intérieur 
             qui vous ressemble avec notre service sur mesure dès aujourd'hui",
            'image' => 'asset/image/MenuiseriePCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Maçonnerie',
            'description' => "Des projets de construction aux rénovations, nos maçons expérimentés sont là pour réaliser vos projets 
             de maçonnerie avec précision et savoir-faire. Que vous ayez besoin de construire un mur, de poser des pavés ou de réparer des fissures, nos maçons sont équipés pour gérer une variété de tâches. Avec notre application conviviale, vous pouvez facilement trouver et contacter des maçons qualifiés, obtenir des devis détaillés et planifier vos travaux en fonction de votre emploi du temps chargé. Faites confiance à notre équipe de professionnels pour des résultats exceptionnels à chaque projet de maçonnerie",
            'image' => 'asset/image/Maçonnerie3PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Spécialiste en froid',
            'description' => "Qu'il s'agisse de réparer votre réfrigérateur, de maintenir votre climatisation ou de régler votre congélateur,
             nos spécialistes en froid sont là pour vous fournir un service fiable et efficace. Avec notre application intuitive, vous pouvez rapidement trouver et contacter des experts qualifiés pour résoudre tous vos problèmes de froid. Notre équipe est disponible pour répondre à vos besoins d'installation, de maintenance et de réparation, afin de garantir le bon fonctionnement de vos appareils électroménagers et de vos systèmes de climatisation. Faites confiance à nos spécialistes en froid pour vous offrir un confort optimal dans votre maison ou votre entreprise",
            'image' => 'asset/image/Specialisteenfroid3PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Couture',
            'description' => "Donnez vie à vos idées de mode avec l'aide de nos couturiers talentueux et créatifs. Qu'il s'agisse de 
             retoucher une robe, de créer un costume sur mesure ou de confectionner des rideaux élégants, nos couturiers sont là pour vous offrir un service personnalisé et de qualité. Grâce à notre application conviviale, vous pouvez facilement trouver et contacter des couturiers professionnels, discuter de vos besoins et suivre chaque étape de la création de vos vêtements ou de vos accessoires. Simplifiez vos projets de couture et habillez-vous avec style grâce à notre service sur mesure dès aujourd'hui",
            'image' => 'asset/image/Couture3PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Tapisserie',
            'description' => "Donnez une nouvelle vie à vos meubles avec notre service de tapisserie expert. Que vous souhaitiez réparer 
             un canapé ancien, restaurer des chaises vintages ou donner une touche de fraîcheur à votre intérieur avec de nouveaux coussins, nos tapissiers expérimentés sont là pour vous aider. Avec notre application conviviale, vous pouvez facilement trouver des tapissiers qualifiés, discuter de vos idées de design et obtenir des devis transparents pour vos projets. Faites confiance à notre équipe de professionnels pour donner à vos meubles un aspect neuf et personnalisé qui reflète votre style unique.",
            'image' => 'asset/image/Tapisserie5PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Coiffure ',
            'description' => "Offrez-vous une expérience de coiffure de luxe dans le confort de votre propre maison grâce à notre service 
             de coiffure à domicile. Nos coiffeurs talentueux sont là pour vous offrir des coupes, des coiffures et des colorations personnalisées qui mettent en valeur votre style et votre personnalité. Avec notre application conviviale, vous pouvez facilement réserver un rendez-vous avec un coiffeur qualifié, discuter de vos préférences et obtenir des conseils d'experts pour prendre soin de vos cheveux entre les rendez-vous. Laissez-nous prendre soin de vos cheveux et vous offrir une expérience de coiffure exceptionnelle, où que vous soyez.",
            'image' => 'asset/image/Coiffure2PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Bijouterie',
            'description' => "Trouvez la pièce parfaite pour compléter votre look avec notre service de bijouterie haut de gamme. Que 
             vous recherchiez une bague de fiançailles étincelante, un collier élégant ou des boucles d'oreilles uniques, nos bijoutiers talentueux sont là pour vous aider à trouver la pièce de vos rêves. Avec notre application conviviale, vous pouvez parcourir une sélection exclusive de bijoux, discuter avec nos experts en bijouterie et obtenir des conseils personnalisés pour choisir la pièce qui vous convient le mieux. Faites confiance à notre équipe pour vous offrir des bijoux de qualité exceptionnelle qui vous accompagnent dans les moments les plus précieux de votre vie.",
            'image' => 'asset/image/Bijouterie2PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Electronique (réparateur TV, portable, etc)',
            'description' => "Retrouvez la fonctionnalité de vos appareils électroniques préférés avec l'aide de nos réparateurs spécialisés
             en électronique. Que vous ayez besoin de faire réparer votre télévision, votre téléphone portable ou votre ordinateur portable, nos techniciens expérimentés sont là pour résoudre tous vos problèmes techniques. Grâce à notre application conviviale, vous pouvez facilement trouver un réparateur qualifié, obtenir des devis transparents et planifier une réparation à un moment qui vous convient. Ne laissez pas les pannes d'électronique gâcher votre journée - faites confiance à notre équipe pour restaurer la fonctionnalité de vos appareils et vous permettre de profiter pleinement de la technologie moderne.",
            'image' => 'asset/image/Electronique2PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Briqueterie',
            'description' => "Donnez à votre propriété une nouvelle allure avec notre service de briqueterie professionnel. Que vous 
             envisagiez de construire un mur de soutènement, de poser des pavés de terrasse ou de restaurer une cheminée ancienne, nos maçons spécialisés en briqueterie sont là pour réaliser vos projets avec expertise et précision. Avec notre application conviviale, vous pouvez parcourir les profils des briqueteurs qualifiés, discuter de vos idées de design et obtenir des devis détaillés pour vos projets. Faites confiance à notre équipe pour transformer votre propriété avec des finitions en briques qui ajoutent du caractère et de la durabilité à votre espace extérieur.",
            'image' => 'asset/image/Briqueterie3PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Boucherie',
            'description' => "Découvrez la fraîcheur et la qualité de la viande avec notre service de boucherie de confiance. Nos bouchers
             expérimentés sélectionnent avec soin les meilleurs morceaux de viande pour vous offrir une expérience culinaire exceptionnelle. Que vous ayez besoin de conseils pour choisir la coupe parfaite ou que vous souhaitiez découvrir de nouvelles recettes, notre équipe est là pour vous guider. Avec notre application conviviale, vous pouvez commander en ligne et vous faire livrer votre viande fraîche directement à votre porte. Faites confiance à notre expertise pour vous offrir des produits de qualité supérieure qui raviront vos papilles à chaque bouchée.",
            'image' => 'asset/image/Boucherie3PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Vente de marchandises',
            'description' => "Découvrez une expérience de shopping unique avec notre service de vente de marchandises en ligne. Parcourez une
             sélection soigneusement choisie de produits de haute qualité, allant des vêtements et accessoires à la décoration intérieure et aux articles de cuisine. Avec notre application conviviale, vous pouvez parcourir les produits, lire les avis des clients et passer commande en toute simplicité. Que vous recherchiez un cadeau spécial ou que vous souhaitiez vous faire plaisir, notre plateforme vous offre une expérience de shopping pratique et sans tracas, où que vous soyez.",
            'image' => 'asset/image/Ventedemarchandises3PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Agroalimentaire, alimentation, restauration',
            'description' => "Découvrez une explosion de saveurs avec notre service d'agroalimentaire, d'alimentation et de restauration.
             De la ferme à la table, nous vous proposons une sélection de produits frais et locaux, ainsi que des plats préparés avec amour par des chefs talentueux. Que vous soyez à la recherche d'ingrédients de qualité pour cuisiner chez vous ou que vous souhaitiez savourer un repas délicieux sans avoir à cuisiner, notre plateforme vous offre une expérience culinaire exceptionnelle. Avec notre application conviviale, vous pouvez commander en ligne, réserver une table dans les meilleurs restaurants de la région et découvrir de nouvelles saveurs qui éveilleront vos sens.",
            'image' => 'asset/image/Agro-Restauration3.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Vitrerie ',
            'description' => "Profitez d'une vue dégagée et d'un éclairage naturel avec notre service de vitrerie professionnel. Nos vitriers
             qualifiés sont là pour remplacer vos vitres cassées, installer de nouvelles fenêtres écoénergétiques ou créer des miroirs sur mesure qui ajoutent une touche d'élégance à votre espace. Avec notre application conviviale, vous pouvez facilement trouver un vitrier qualifié, obtenir des devis transparents et planifier une intervention à un moment qui vous convient. Faites confiance à notre équipe pour vous offrir des solutions de vitrage durables et esthétiques qui améliorent votre environnement de vie ou de travail.",
            'image' => 'asset/image/Vitrerie3PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Hygiène et soins corporels',
            'description' => "Parez-vous d'une beauté éclatante avec notre service d'hygiène et de soins corporels de luxe. Nos esthéticiennes et
             thérapeutes qualifiées sont là pour vous offrir une expérience de bien-être ultime, des soins du visage relaxants aux massages apaisants en passant par les manucures et pédicures impeccables. Avec notre application conviviale, vous pouvez facilement réserver un rendez-vous, choisir parmi une gamme de traitements de luxe et vous offrir un moment de détente bien mérité. Faites confiance à notre équipe pour prendre soin de vous de la tête aux pieds et vous aider à vous sentir ressourcé et rajeuni.",
            'image' => 'asset/image/Hygièneetplus1PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Audiovisuel et communication',
            'description' => "Plongez dans un monde d'expériences sensorielles avec notre service audiovisuel et de communication. Des installations
             audiovisuelles spectaculaires aux solutions de communication innovantes, notre équipe d'experts est là pour vous offrir des solutions sur mesure qui captivent et engagent votre public. Avec notre application conviviale, vous pouvez facilement trouver des professionnels qualifiés, discuter de vos besoins spécifiques et obtenir des conseils d'experts pour créer des expériences mémorables. Faites confiance à notre équipe pour vous aider à transmettre votre message de manière claire, impactante et inoubliable.",
            'image' => 'asset/image/Audiovisuel2PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => 'Transport',
            'description' => "Simplifiez vos déplacements avec notre service de transport fiable et pratique. Que vous ayez besoin d'une voiture pour vous
             rendre à un rendez-vous important ou que vous souhaitiez organiser un transport pour un groupe, notre équipe de chauffeurs professionnels est là pour vous offrir une solution sur mesure. Avec notre application conviviale, vous pouvez réserver un trajet en quelques clics, suivre votre chauffeur en temps réel et arriver à destination en toute sécurité et à temps. Faites confiance à notre équipe pour vous offrir un service de transport de qualité supérieure qui répond à tous vos besoins de déplacement.",
            'image' => 'asset/image/Transport2PCT.svg'
        ],
        );

        Metier::factory()->create([
            'domaine' => "Artisanat d'art et de décoration",
            'description' => "Emballez votre espace avec des œuvres d'art uniques et des pièces de décoration originales grâce à notre service d'artisanat d'art et de décoration. Des peintures abstraites aux sculptures sur bois en passant par les textiles faits à la main, nous vous proposons une sélection éclectique d'œuvres d'art créatives et inspirantes pour embellir votre environnement. Avec notre application conviviale, vous pouvez explorer une variété de créations, discuter directement avec des artistes talentueux et trouver la pièce parfaite qui complète votre style et votre vision. Faites confiance à notre équipe pour vous aider à créer un espace qui raconte votre histoire et reflète votre personnalité unique.",
            'image' => 'asset/image/ArtisanatartetdécoPCT.svg'
        ],
        );
        
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
