<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            [
                'name' => "Marvel's Spider-Man: Miles Morales",
                'publisher' => 'Sony',
                'price' => 179.90,
                'promotional_price' => 139.90,
                'description' => 'Spider-Man: Miles Morales é um jogo eletrônico de ação-aventura desenvolvido pela Insomniac Games e publicado pela Sony Interactive Entertainment para o PlayStation 4 e PlayStation 5. É uma expansão autônoma de Spider-Man, de 2018, e foi anunciado pela primeira vez no evento de revelação do PlayStation 5 em junho de 2020. Ele foi lançado em novembro de 2020 para PlayStation 4 e como um título de lançamento do PlayStation 5.',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "FIFA 21",
                'publisher' => 'EA Games',
                'price' => 176.90,
                'promotional_price' => 99.90,
                'description' => 'FIFA 21 PS5 Mídia Digital apresenta uma nova maneira de jogar futebol, com toda cultura, criatividade e estilo das ruas e quadras pelo mundo. Crie seu jogador ou jogadora, escolha seu equipamento e mostre seu estilo no mundo inteiro. Jogue futebol do seu jeito em vários formatos de partida, como 5x5, com ou sem paredes, sem goleiros ou futsal profissional. Experimente o novo sistema no modo Carreira, que possibilita o jogador comandar seu time como treinador. Desenvolva seu time desde as categorias de base, compre jogadores, realize seus treinos e táticas, defina posicionamento estratégico de sua equipe e torne seu time o melhor de todos os tempos. O jogador também tem controle de momentos decisivos que afetam diretamente os resultados dos jogos, tanto no ataque como defesa, com jogadas ensaiadas e finalizações elaboradas.',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cyberpunk 2077",
                'publisher' => 'CD Projekt RED',
                'price' => 189.90,
                'promotional_price' => 148.90,
                'description' => 'Cyberpunk 2077 PS4 Mídia Digital transfere o jogador para um mundo futurístico obcecado por poder, glamour e biomodificações. Controle V, um ambicioso mercenário equipado com melhorias cibernéticas, na busca de um implante que carrega a chave da imortalidade. O jogo define um novo patamar no gênero de mundo aberto, com infinitas opções de jogabilidade, missões e customizações. O jogo se passa em Night City, uma cidade viva com distritos únicos e cheios de personalidade. O estilo de jogabilidade está totalmente nas mãos do jogador, que pode hackear diversos elementos do cenário para uma abordagem furtiva, ou optar por armas pesadas e partir para agressividade contra seus inimigos. Cyberpunk 2077 é um jogo extraordinário, com uma vasta gama de elementos de jogabilidade e personalizações, que agradam a todos os tipos de jogadores.',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Minecraft",
                'publisher' => 'Mojang',
                'price' => 79.00,
                'promotional_price' => 59.90,
                'description' => 'Explore mundos gerados aleatoriamente e construa das casas mais simples aos maiores castelos. Jogue no modo criativo com recursos ilimitados, ou minere as profundezas do mundo no modo sobrevivência, criando armas e armaduras para se defender das criaturas. Esta versão permite que você jogue em diferentes dispositivos, acesse uma infinidade de conteúdos através da loja do jogo e obtenha todas as atualizações futuras do título.',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "F1 2020",
                'publisher' => 'Codemasters',
                'price' => 119.50,
                'promotional_price' => 79.90,
                'description' => 'Explore mundos gerados aleatoriamente e construa das casas mais simples aos maiores castelos. Jogue no modo criativo com recursos ilimitados, ou minere as profundezas do mundo no modo sobrevivência, criando armas e armaduras para se defender das criaturas. Esta versão permite que você jogue em diferentes dispositivos, acesse uma infinidade de conteúdos através da loja do jogo e obtenha todas as atualizações futuras do título.',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tropico 6",
                'publisher' => 'Kalypso Media',
                'price' => 162.89,
                'promotional_price' => 82.46,
                'description' => 'El Presidente está de volta! Mostre novamente do que você é capaz como um ditador temido ou um estadista pacífico no país insular Tropico e molde o destino de sua própria republiqueta.
                Tropico 6 é um jogo de construção, gerenciamento e simulação política da série Tropico.',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('games')->insert($games);
    }
}
