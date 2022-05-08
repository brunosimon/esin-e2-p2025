<?php

/*

    NFTs:
    https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/2554
    https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/5614
    https://opensea.io/assets/0xed5af388653567af2f388e6224dc7c4b3241c544/1840
    https://opensea.io/assets/0x3a5051566b2241285be871f650c445a88a970edd/4830
    https://opensea.io/assets/0x988a3e9834f1a4977e6f727e18ea167089349ba2/8522
    https://opensea.io/assets/0xfd3c3717164831916e6d2d7cdde9904dd793ec84/4805
    https://opensea.io/assets/0xfd3c3717164831916e6d2d7cdde9904dd793ec84/1801
    https://opensea.io/assets/0x9a534628b4062e123ce7ee2222ec20b86e16ca8f/3213
    https://opensea.io/assets/0x9a534628b4062e123ce7ee2222ec20b86e16ca8f/8834
    https://opensea.io/assets/0x9a534628b4062e123ce7ee2222ec20b86e16ca8f/749

    Authors:
    https://opensea.io/collection/azuki
    https://opensea.io/collection/thehumanoids
    https://opensea.io/collection/theanimoon
    https://opensea.io/collection/chameleon-collective
    https://opensea.io/collection/mekaverse

    Owners:
    https://opensea.io/NeoFuQ
    https://opensea.io/V1Zhual
    https://opensea.io/JHLYeung

 */

    $ethToUsd = 2599.10;

    $nfts = [
        [
            'title' => 'The Chameleon Collective 1801',
            'author' => 3,
            'owner' => 1,
            'sold' => true,
            'saleDate' => 1634994820,
            'value' => 0.08,
            'image' => 'assets/images/the-chameleon-collective-1801.png',
        ],
        [
            'title' => 'Animoon #8522',
            'author' => 2,
            'owner' => null,
            'sold' => false,
            'saleDate' => null,
            'value' => 0.9144,
            'image' => 'assets/images/humanoid-4830.jpg',
        ],
        [
            'title' => 'Azuki #2554',
            'author' => 0,
            'owner' => 0,
            'sold' => true,
            'saleDate' => 1643210321,
            'value' => 6.8889,
            'image' => 'assets/images/azuki-5614.png',
        ],
        [
            'title' => 'Azuki #2554',
            'author' => 0,
            'owner' => null,
            'sold' => false,
            'saleDate' => null,
            'value' => 100,
            'image' => 'assets/images/azuki-2554.png',
        ],
        [
            'title' => 'Meka #3213',
            'author' => 4,
            'owner' => 2,
            'sold' => true,
            'saleDate' => 1637504020,
            'value' => 1,
            'image' => 'assets/images/meka-3213.png',
        ],
        [
            'title' => 'Meka #8834',
            'author' => 4,
            'owner' => 0,
            'sold' => true,
            'saleDate' => 1640510020,
            'value' => 1.437,
            'image' => 'assets/images/meka-8834.png',
        ],
        [
            'title' => 'The Chameleon Collective 1629',
            'author' => 3,
            'owner' => 0,
            'sold' => true,
            'saleDate' => 1641647920,
            'value' => 0.05,
            'image' => 'assets/images/the-chameleon-collective-1629.png',
        ],
        [
            'title' => 'Meka #749',
            'author' => 4,
            'owner' => 1,
            'sold' => true,
            'saleDate' => 1625141798,
            'value' => 1.43,
            'image' => 'assets/images/meka-749.png',
        ],
        [
            'title' => 'Azuki #1840',
            'author' => 0,
            'owner' => 1,
            'sold' => true,
            'saleDate' => 1643037521,
            'value' => 7,
            'image' => 'assets/images/azuki-1840.png',
        ],
        [
            'title' => 'Humanoid #4830',
            'author' => 1,
            'owner' => 2,
            'sold' => true,
            'saleDate' => 1636643921,
            'value' => 0.33,
            'image' => 'assets/images/humanoid-4830.jpg',
        ],
    ];

    $authors = [
        [
            'title' => 'Azuki',
            'registrationDate' => 1609600755,
            'items' => 10002,
            'owners' => 5541,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/AzukiZen',
                'instagram' => 'https://www.instagram.com/azuki_zen/',
                'discord' => 'https://discord.com/invite/azuki',
            ],
        ],
        [
            'title' => 'The Humanoids',
            'registrationDate' => 1601400675,
            'items' => 9563,
            'owners' => 4649,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/TheHumanoidsNFT',
                'instagram' => 'https://www.instagram.com/thehumanoidsnft/',
            ],
        ],
        [
            'title' => 'The Animoon',
            'registrationDate' => 1621715115,
            'items' => 9929,
            'owners' => 5601,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/Animoonofficial',
                'instagram' => 'https://www.instagram.com/animoonofficial/',
                'discord' => 'https://discord.com/invite/animoon',
            ],
        ],
        [
            'title' => 'Chameleon Collective',
            'registrationDate' => 1624393515,
            'items' => 11936,
            'owners' => 2828,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/Chameleon_NFT',
                'instagram' => 'https://www.instagram.com/Chameleon_NFT/',
                'discord' => 'https://discord.com/invite/chameleoncollective',
                'medium' => 'https://medium.com/@ChameleonCollective',
            ],
        ],
        [
            'title' => 'MekaVerse',
            'registrationDate' => 1609550475,
            'items' => 8991,
            'owners' => 5098,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/MekaVerse',
                'discord' => 'https://discord.com/invite/mekaverse',
            ],
        ],
    ];

    $owners = [
        [
            'name' => 'NeoFuQ',
            'registrationDate' => 1609190475,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/neofuq',
            ],
        ],
        [
            'name' => 'V1Zhual',
            'registrationDate' => 1609350475,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/V1Zhual',
                'instagram' => 'https://www.instagram.com/V1Zhual/',
            ],
        ],
        [
            'name' => 'JHLYeung',
            'registrationDate' => 1609280475,
            'socials' =>
            [
                'twitter' => 'https://twitter.com/JHLYeung',
            ],
        ],
    ];