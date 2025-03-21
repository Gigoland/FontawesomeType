<?php
/**
 * FontawesomeType
 * (c) Gigoland.com
 * @link https://gigoland.com
 */

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FontawesomeType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => [
                '500px' => 'fa-500px',
                'Address Book' => 'fa-address-book',
                'Address Book O' => 'fa-address-book-o',
                'Address Card' => 'fa-address-card',
                'Address Card O' => 'fa-address-card-o',
                'Adjust' => 'fa-adjust',
                'Adn' => 'fa-adn',
                'Align Center' => 'fa-align-center',
                'Align Justify' => 'fa-align-justify',
                'Align Left' => 'fa-align-left',
                'Align Right' => 'fa-align-right',
                'Amazon' => 'fa-amazon',
                'Ambulance' => 'fa-ambulance',
                'American Sign Language Interpreting' => 'fa-american-sign-language-interpreting',
                'Anchor' => 'fa-anchor',
                'Android' => 'fa-android',
                'Angellist' => 'fa-angellist',
                'Angle Double Down' => 'fa-angle-double-down',
                'Angle Double Left' => 'fa-angle-double-left',
                'Angle Double Right' => 'fa-angle-double-right',
                'Angle Double Up' => 'fa-angle-double-up',
                'Angle Down' => 'fa-angle-down',
                'Angle Left' => 'fa-angle-left',
                'Angle Right' => 'fa-angle-right',
                'Angle Up' => 'fa-angle-up',
                'Apple' => 'fa-apple',
                'Archive' => 'fa-archive',
                'Area Chart' => 'fa-area-chart',
                'Arrow Circle Down' => 'fa-arrow-circle-down',
                'Arrow Circle Left' => 'fa-arrow-circle-left',
                'Arrow Circle O Down' => 'fa-arrow-circle-o-down',
                'Arrow Circle O Left' => 'fa-arrow-circle-o-left',
                'Arrow Circle O Right' => 'fa-arrow-circle-o-right',
                'Arrow Circle O Up' => 'fa-arrow-circle-o-up',
                'Arrow Circle Right' => 'fa-arrow-circle-right',
                'Arrow Circle Up' => 'fa-arrow-circle-up',
                'Arrow Down' => 'fa-arrow-down',
                'Arrow Left' => 'fa-arrow-left',
                'Arrow Right' => 'fa-arrow-right',
                'Arrow Up' => 'fa-arrow-up',
                'Arrows' => 'fa-arrows',
                'Arrows Alt' => 'fa-arrows-alt',
                'Arrows H' => 'fa-arrows-h',
                'Arrows V' => 'fa-arrows-v',
                'Assistive Listening Systems' => 'fa-assistive-listening-systems',
                'Asterisk' => 'fa-asterisk',
                'At' => 'fa-at',
                'Audio Description' => 'fa-audio-description',
                'Backward' => 'fa-backward',
                'Balance Scale' => 'fa-balance-scale',
                'Ban' => 'fa-ban',
                'Bandcamp' => 'fa-bandcamp',
                'Bar Chart' => 'fa-bar-chart',
                'Barcode' => 'fa-barcode',
                'Bars' => 'fa-bars',
                'Bath' => 'fa-bath',
                'Battery Empty' => 'fa-battery-empty',
                'Battery Full' => 'fa-battery-full',
                'Battery Half' => 'fa-battery-half',
                'Battery Quarter' => 'fa-battery-quarter',
                'Battery Three Quarters' => 'fa-battery-three-quarters',
                'Bed' => 'fa-bed',
                'Beer' => 'fa-beer',
                'Behance' => 'fa-behance',
                'Behance Square' => 'fa-behance-square',
                'Bell' => 'fa-bell',
                'Bell O' => 'fa-bell-o',
                'Bell Slash' => 'fa-bell-slash',
                'Bell Slash O' => 'fa-bell-slash-o',
                'Bicycle' => 'fa-bicycle',
                'Binoculars' => 'fa-binoculars',
                'Birthday Cake' => 'fa-birthday-cake',
                'Bitbucket' => 'fa-bitbucket',
                'Bitbucket Square' => 'fa-bitbucket-square',
                'Black Tie' => 'fa-black-tie',
                'Blind' => 'fa-blind',
                'Bluetooth' => 'fa-bluetooth',
                'Bluetooth B' => 'fa-bluetooth-b',
                'Bold' => 'fa-bold',
                'Bolt' => 'fa-bolt',
                'Bomb' => 'fa-bomb',
                'Book' => 'fa-book',
                'Bookmark' => 'fa-bookmark',
                'Bookmark O' => 'fa-bookmark-o',
                'Braille' => 'fa-braille',
                'Briefcase' => 'fa-briefcase',
                'Btc' => 'fa-btc',
                'Bug' => 'fa-bug',
                'Building' => 'fa-building',
                'Building O' => 'fa-building-o',
                'Bullhorn' => 'fa-bullhorn',
                'Bullseye' => 'fa-bullseye',
                'Bus' => 'fa-bus',
                'Buysellads' => 'fa-buysellads',
                'Calculator' => 'fa-calculator',
                'Calendar' => 'fa-calendar',
                'Calendar Check O' => 'fa-calendar-check-o',
                'Calendar Minus O' => 'fa-calendar-minus-o',
                'Calendar O' => 'fa-calendar-o',
                'Calendar Plus O' => 'fa-calendar-plus-o',
                'Calendar Times O' => 'fa-calendar-times-o',
                'Camera' => 'fa-camera',
                'Camera Retro' => 'fa-camera-retro',
                'Car' => 'fa-car',
                'Caret Down' => 'fa-caret-down',
                'Caret Left' => 'fa-caret-left',
                'Caret Right' => 'fa-caret-right',
                'Caret Square O Down' => 'fa-caret-square-o-down',
                'Caret Square O Left' => 'fa-caret-square-o-left',
                'Caret Square O Right' => 'fa-caret-square-o-right',
                'Caret Square O Up' => 'fa-caret-square-o-up',
                'Caret Up' => 'fa-caret-up',
                'Cart Arrow Down' => 'fa-cart-arrow-down',
                'Cart Plus' => 'fa-cart-plus',
                'Cc' => 'fa-cc',
                'Cc Amex' => 'fa-cc-amex',
                'Cc Diners Club' => 'fa-cc-diners-club',
                'Cc Discover' => 'fa-cc-discover',
                'Cc Jcb' => 'fa-cc-jcb',
                'Cc Mastercard' => 'fa-cc-mastercard',
                'Cc Paypal' => 'fa-cc-paypal',
                'Cc Stripe' => 'fa-cc-stripe',
                'Cc Visa' => 'fa-cc-visa',
                'Certificate' => 'fa-certificate',
                'Chain Broken' => 'fa-chain-broken',
                'Check' => 'fa-check',
                'Check Circle' => 'fa-check-circle',
                'Check Circle O' => 'fa-check-circle-o',
                'Check Square' => 'fa-check-square',
                'Check Square O' => 'fa-check-square-o',
                'Chevron Circle Down' => 'fa-chevron-circle-down',
                'Chevron Circle Left' => 'fa-chevron-circle-left',
                'Chevron Circle Right' => 'fa-chevron-circle-right',
                'Chevron Circle Up' => 'fa-chevron-circle-up',
                'Chevron Down' => 'fa-chevron-down',
                'Chevron Left' => 'fa-chevron-left',
                'Chevron Right' => 'fa-chevron-right',
                'Chevron Up' => 'fa-chevron-up',
                'Child' => 'fa-child',
                'Chrome' => 'fa-chrome',
                'Circle' => 'fa-circle',
                'Circle O' => 'fa-circle-o',
                'Circle O Notch' => 'fa-circle-o-notch',
                'Circle Thin' => 'fa-circle-thin',
                'Clipboard' => 'fa-clipboard',
                'Clock O' => 'fa-clock-o',
                'Clone' => 'fa-clone',
                'Cloud' => 'fa-cloud',
                'Cloud Download' => 'fa-cloud-download',
                'Cloud Upload' => 'fa-cloud-upload',
                'Code' => 'fa-code',
                'Code Fork' => 'fa-code-fork',
                'Codepen' => 'fa-codepen',
                'Codiepie' => 'fa-codiepie',
                'Coffee' => 'fa-coffee',
                'Cog' => 'fa-cog',
                'Cogs' => 'fa-cogs',
                'Columns' => 'fa-columns',
                'Comment' => 'fa-comment',
                'Comment O' => 'fa-comment-o',
                'Commenting' => 'fa-commenting',
                'Commenting O' => 'fa-commenting-o',
                'Comments' => 'fa-comments',
                'Comments O' => 'fa-comments-o',
                'Compass' => 'fa-compass',
                'Compress' => 'fa-compress',
                'Connectdevelop' => 'fa-connectdevelop',
                'Contao' => 'fa-contao',
                'Copyright' => 'fa-copyright',
                'Creative Commons' => 'fa-creative-commons',
                'Credit Card' => 'fa-credit-card',
                'Credit Card Alt' => 'fa-credit-card-alt',
                'Crop' => 'fa-crop',
                'Crosshairs' => 'fa-crosshairs',
                'Css3' => 'fa-css3',
                'Cube' => 'fa-cube',
                'Cubes' => 'fa-cubes',
                'Cutlery' => 'fa-cutlery',
                'Dashcube' => 'fa-dashcube',
                'Database' => 'fa-database',
                'Deaf' => 'fa-deaf',
                'Delicious' => 'fa-delicious',
                'Desktop' => 'fa-desktop',
                'Deviantart' => 'fa-deviantart',
                'Diamond' => 'fa-diamond',
                'Digg' => 'fa-digg',
                'Dot Circle O' => 'fa-dot-circle-o',
                'Download' => 'fa-download',
                'Dribbble' => 'fa-dribbble',
                'Dropbox' => 'fa-dropbox',
                'Drupal' => 'fa-drupal',
                'Edge' => 'fa-edge',
                'Eercast' => 'fa-eercast',
                'Eject' => 'fa-eject',
                'Ellipsis H' => 'fa-ellipsis-h',
                'Ellipsis V' => 'fa-ellipsis-v',
                'Empire' => 'fa-empire',
                'Envelope' => 'fa-envelope',
                'Envelope O' => 'fa-envelope-o',
                'Envelope Open' => 'fa-envelope-open',
                'Envelope Open O' => 'fa-envelope-open-o',
                'Envelope Square' => 'fa-envelope-square',
                'Envira' => 'fa-envira',
                'Eraser' => 'fa-eraser',
                'Etsy' => 'fa-etsy',
                'Eur' => 'fa-eur',
                'Exchange' => 'fa-exchange',
                'Exclamation' => 'fa-exclamation',
                'Exclamation Circle' => 'fa-exclamation-circle',
                'Exclamation Triangle' => 'fa-exclamation-triangle',
                'Expand' => 'fa-expand',
                'Expeditedssl' => 'fa-expeditedssl',
                'External Link' => 'fa-external-link',
                'External Link Square' => 'fa-external-link-square',
                'Eye' => 'fa-eye',
                'Eye Slash' => 'fa-eye-slash',
                'Eyedropper' => 'fa-eyedropper',
                'Facebook' => 'fa-facebook',
                'Facebook Official' => 'fa-facebook-official',
                'Facebook Square' => 'fa-facebook-square',
                'Fast Backward' => 'fa-fast-backward',
                'Fast Forward' => 'fa-fast-forward',
                'Fax' => 'fa-fax',
                'Female' => 'fa-female',
                'Fighter Jet' => 'fa-fighter-jet',
                'File' => 'fa-file',
                'File Archive O' => 'fa-file-archive-o',
                'File Audio O' => 'fa-file-audio-o',
                'File Code O' => 'fa-file-code-o',
                'File Excel O' => 'fa-file-excel-o',
                'File Image O' => 'fa-file-image-o',
                'File O' => 'fa-file-o',
                'File Pdf O' => 'fa-file-pdf-o',
                'File Powerpoint O' => 'fa-file-powerpoint-o',
                'File Text' => 'fa-file-text',
                'File Text O' => 'fa-file-text-o',
                'File Video O' => 'fa-file-video-o',
                'File Word O' => 'fa-file-word-o',
                'Files O' => 'fa-files-o',
                'Film' => 'fa-film',
                'Filter' => 'fa-filter',
                'Fire' => 'fa-fire',
                'Fire Extinguisher' => 'fa-fire-extinguisher',
                'Firefox' => 'fa-firefox',
                'First Order' => 'fa-first-order',
                'Flag' => 'fa-flag',
                'Flag Checkered' => 'fa-flag-checkered',
                'Flag O' => 'fa-flag-o',
                'Flask' => 'fa-flask',
                'Flickr' => 'fa-flickr',
                'Floppy O' => 'fa-floppy-o',
                'Folder' => 'fa-folder',
                'Folder O' => 'fa-folder-o',
                'Folder Open' => 'fa-folder-open',
                'Folder Open O' => 'fa-folder-open-o',
                'Font' => 'fa-font',
                'Font Awesome' => 'fa-font-awesome',
                'Fonticons' => 'fa-fonticons',
                'Fort Awesome' => 'fa-fort-awesome',
                'Forumbee' => 'fa-forumbee',
                'Forward' => 'fa-forward',
                'Foursquare' => 'fa-foursquare',
                'Free Code Camp' => 'fa-free-code-camp',
                'Frown O' => 'fa-frown-o',
                'Futbol O' => 'fa-futbol-o',
                'Gamepad' => 'fa-gamepad',
                'Gavel' => 'fa-gavel',
                'Gbp' => 'fa-gbp',
                'Genderless' => 'fa-genderless',
                'Get Pocket' => 'fa-get-pocket',
                'Gg' => 'fa-gg',
                'Gg Circle' => 'fa-gg-circle',
                'Gift' => 'fa-gift',
                'Git' => 'fa-git',
                'Git Square' => 'fa-git-square',
                'Github' => 'fa-github',
                'Github Alt' => 'fa-github-alt',
                'Github Square' => 'fa-github-square',
                'Gitlab' => 'fa-gitlab',
                'Glass' => 'fa-glass',
                'Glide' => 'fa-glide',
                'Glide G' => 'fa-glide-g',
                'Globe' => 'fa-globe',
                'Google' => 'fa-google',
                'Google Plus' => 'fa-google-plus',
                'Google Plus Official' => 'fa-google-plus-official',
                'Google Plus Square' => 'fa-google-plus-square',
                'Google Wallet' => 'fa-google-wallet',
                'Graduation Cap' => 'fa-graduation-cap',
                'Gratipay' => 'fa-gratipay',
                'Grav' => 'fa-grav',
                'H Square' => 'fa-h-square',
                'Hacker News' => 'fa-hacker-news',
                'Hand Lizard O' => 'fa-hand-lizard-o',
                'Hand O Down' => 'fa-hand-o-down',
                'Hand O Left' => 'fa-hand-o-left',
                'Hand O Right' => 'fa-hand-o-right',
                'Hand O Up' => 'fa-hand-o-up',
                'Hand Paper O' => 'fa-hand-paper-o',
                'Hand Peace O' => 'fa-hand-peace-o',
                'Hand Pointer O' => 'fa-hand-pointer-o',
                'Hand Rock O' => 'fa-hand-rock-o',
                'Hand Scissors O' => 'fa-hand-scissors-o',
                'Hand Spock O' => 'fa-hand-spock-o',
                'Handshake O' => 'fa-handshake-o',
                'Hashtag' => 'fa-hashtag',
                'Hdd O' => 'fa-hdd-o',
                'Header' => 'fa-header',
                'Headphones' => 'fa-headphones',
                'Heart' => 'fa-heart',
                'Heart O' => 'fa-heart-o',
                'Heartbeat' => 'fa-heartbeat',
                'History' => 'fa-history',
                'Home' => 'fa-home',
                'Hospital O' => 'fa-hospital-o',
                'Hourglass' => 'fa-hourglass',
                'Hourglass End' => 'fa-hourglass-end',
                'Hourglass Half' => 'fa-hourglass-half',
                'Hourglass O' => 'fa-hourglass-o',
                'Hourglass Start' => 'fa-hourglass-start',
                'Houzz' => 'fa-houzz',
                'Html5' => 'fa-html5',
                'I Cursor' => 'fa-i-cursor',
                'Id Badge' => 'fa-id-badge',
                'Id Card' => 'fa-id-card',
                'Id Card O' => 'fa-id-card-o',
                'Ils' => 'fa-ils',
                'Imdb' => 'fa-imdb',
                'Inbox' => 'fa-inbox',
                'Indent' => 'fa-indent',
                'Industry' => 'fa-industry',
                'Info' => 'fa-info',
                'Info Circle' => 'fa-info-circle',
                'Inr' => 'fa-inr',
                'Instagram' => 'fa-instagram',
                'Internet Explorer' => 'fa-internet-explorer',
                'Ioxhost' => 'fa-ioxhost',
                'Italic' => 'fa-italic',
                'Joomla' => 'fa-joomla',
                'Jpy' => 'fa-jpy',
                'Jsfiddle' => 'fa-jsfiddle',
                'Key' => 'fa-key',
                'Keyboard O' => 'fa-keyboard-o',
                'Krw' => 'fa-krw',
                'Language' => 'fa-language',
                'Laptop' => 'fa-laptop',
                'Lastfm' => 'fa-lastfm',
                'Lastfm Square' => 'fa-lastfm-square',
                'Leaf' => 'fa-leaf',
                'Leanpub' => 'fa-leanpub',
                'Lemon O' => 'fa-lemon-o',
                'Level Down' => 'fa-level-down',
                'Level Up' => 'fa-level-up',
                'Life Ring' => 'fa-life-ring',
                'Lightbulb O' => 'fa-lightbulb-o',
                'Line Chart' => 'fa-line-chart',
                'Link' => 'fa-link',
                'Linkedin' => 'fa-linkedin',
                'Linkedin Square' => 'fa-linkedin-square',
                'Linode' => 'fa-linode',
                'Linux' => 'fa-linux',
                'List' => 'fa-list',
                'List Alt' => 'fa-list-alt',
                'List Ol' => 'fa-list-ol',
                'List Ul' => 'fa-list-ul',
                'Location Arrow' => 'fa-location-arrow',
                'Lock' => 'fa-lock',
                'Long Arrow Down' => 'fa-long-arrow-down',
                'Long Arrow Left' => 'fa-long-arrow-left',
                'Long Arrow Right' => 'fa-long-arrow-right',
                'Long Arrow Up' => 'fa-long-arrow-up',
                'Low Vision' => 'fa-low-vision',
                'Magic' => 'fa-magic',
                'Magnet' => 'fa-magnet',
                'Male' => 'fa-male',
                'Map' => 'fa-map',
                'Map Marker' => 'fa-map-marker',
                'Map O' => 'fa-map-o',
                'Map Pin' => 'fa-map-pin',
                'Map Signs' => 'fa-map-signs',
                'Mars' => 'fa-mars',
                'Mars Double' => 'fa-mars-double',
                'Mars Stroke' => 'fa-mars-stroke',
                'Mars Stroke H' => 'fa-mars-stroke-h',
                'Mars Stroke V' => 'fa-mars-stroke-v',
                'Maxcdn' => 'fa-maxcdn',
                'Meanpath' => 'fa-meanpath',
                'Medium' => 'fa-medium',
                'Medkit' => 'fa-medkit',
                'Meetup' => 'fa-meetup',
                'Meh O' => 'fa-meh-o',
                'Mercury' => 'fa-mercury',
                'Microchip' => 'fa-microchip',
                'Microphone' => 'fa-microphone',
                'Microphone Slash' => 'fa-microphone-slash',
                'Minus' => 'fa-minus',
                'Minus Circle' => 'fa-minus-circle',
                'Minus Square' => 'fa-minus-square',
                'Minus Square O' => 'fa-minus-square-o',
                'Mixcloud' => 'fa-mixcloud',
                'Mobile' => 'fa-mobile',
                'Modx' => 'fa-modx',
                'Money' => 'fa-money',
                'Moon O' => 'fa-moon-o',
                'Motorcycle' => 'fa-motorcycle',
                'Mouse Pointer' => 'fa-mouse-pointer',
                'Music' => 'fa-music',
                'Neuter' => 'fa-neuter',
                'Newspaper O' => 'fa-newspaper-o',
                'Object Group' => 'fa-object-group',
                'Object Ungroup' => 'fa-object-ungroup',
                'Odnoklassniki' => 'fa-odnoklassniki',
                'Odnoklassniki Square' => 'fa-odnoklassniki-square',
                'Opencart' => 'fa-opencart',
                'Openid' => 'fa-openid',
                'Opera' => 'fa-opera',
                'Optin Monster' => 'fa-optin-monster',
                'Outdent' => 'fa-outdent',
                'Pagelines' => 'fa-pagelines',
                'Paint Brush' => 'fa-paint-brush',
                'Paper Plane' => 'fa-paper-plane',
                'Paper Plane O' => 'fa-paper-plane-o',
                'Paperclip' => 'fa-paperclip',
                'Paragraph' => 'fa-paragraph',
                'Pause' => 'fa-pause',
                'Pause Circle' => 'fa-pause-circle',
                'Pause Circle O' => 'fa-pause-circle-o',
                'Paw' => 'fa-paw',
                'Paypal' => 'fa-paypal',
                'Pencil' => 'fa-pencil',
                'Pencil Square' => 'fa-pencil-square',
                'Pencil Square O' => 'fa-pencil-square-o',
                'Percent' => 'fa-percent',
                'Phone' => 'fa-phone',
                'Phone Square' => 'fa-phone-square',
                'Picture O' => 'fa-picture-o',
                'Pie Chart' => 'fa-pie-chart',
                'Pied Piper' => 'fa-pied-piper',
                'Pied Piper Alt' => 'fa-pied-piper-alt',
                'Pied Piper Pp' => 'fa-pied-piper-pp',
                'Pinterest' => 'fa-pinterest',
                'Pinterest P' => 'fa-pinterest-p',
                'Pinterest Square' => 'fa-pinterest-square',
                'Plane' => 'fa-plane',
                'Play' => 'fa-play',
                'Play Circle' => 'fa-play-circle',
                'Play Circle O' => 'fa-play-circle-o',
                'Plug' => 'fa-plug',
                'Plus' => 'fa-plus',
                'Plus Circle' => 'fa-plus-circle',
                'Plus Square' => 'fa-plus-square',
                'Plus Square O' => 'fa-plus-square-o',
                'Podcast' => 'fa-podcast',
                'Power Off' => 'fa-power-off',
                'Print' => 'fa-print',
                'Product Hunt' => 'fa-product-hunt',
                'Puzzle Piece' => 'fa-puzzle-piece',
                'Qq' => 'fa-qq',
                'Qrcode' => 'fa-qrcode',
                'Question' => 'fa-question',
                'Question Circle' => 'fa-question-circle',
                'Question Circle O' => 'fa-question-circle-o',
                'Quora' => 'fa-quora',
                'Quote Left' => 'fa-quote-left',
                'Quote Right' => 'fa-quote-right',
                'Random' => 'fa-random',
                'Ravelry' => 'fa-ravelry',
                'Rebel' => 'fa-rebel',
                'Recycle' => 'fa-recycle',
                'Reddit' => 'fa-reddit',
                'Reddit Alien' => 'fa-reddit-alien',
                'Reddit Square' => 'fa-reddit-square',
                'Refresh' => 'fa-refresh',
                'Registered' => 'fa-registered',
                'Renren' => 'fa-renren',
                'Repeat' => 'fa-repeat',
                'Reply' => 'fa-reply',
                'Reply All' => 'fa-reply-all',
                'Retweet' => 'fa-retweet',
                'Road' => 'fa-road',
                'Rocket' => 'fa-rocket',
                'Rss' => 'fa-rss',
                'Rss Square' => 'fa-rss-square',
                'Rub' => 'fa-rub',
                'Safari' => 'fa-safari',
                'Scissors' => 'fa-scissors',
                'Scribd' => 'fa-scribd',
                'Search' => 'fa-search',
                'Search Minus' => 'fa-search-minus',
                'Search Plus' => 'fa-search-plus',
                'Sellsy' => 'fa-sellsy',
                'Server' => 'fa-server',
                'Share' => 'fa-share',
                'Share Alt' => 'fa-share-alt',
                'Share Alt Square' => 'fa-share-alt-square',
                'Share Square' => 'fa-share-square',
                'Share Square O' => 'fa-share-square-o',
                'Shield' => 'fa-shield',
                'Ship' => 'fa-ship',
                'Shirtsinbulk' => 'fa-shirtsinbulk',
                'Shopping Bag' => 'fa-shopping-bag',
                'Shopping Basket' => 'fa-shopping-basket',
                'Shopping Cart' => 'fa-shopping-cart',
                'Shower' => 'fa-shower',
                'Sign In' => 'fa-sign-in',
                'Sign Language' => 'fa-sign-language',
                'Sign Out' => 'fa-sign-out',
                'Signal' => 'fa-signal',
                'Simplybuilt' => 'fa-simplybuilt',
                'Sitemap' => 'fa-sitemap',
                'Skyatlas' => 'fa-skyatlas',
                'Skype' => 'fa-skype',
                'Slack' => 'fa-slack',
                'Sliders' => 'fa-sliders',
                'Slideshare' => 'fa-slideshare',
                'Smile O' => 'fa-smile-o',
                'Snapchat' => 'fa-snapchat',
                'Snapchat Ghost' => 'fa-snapchat-ghost',
                'Snapchat Square' => 'fa-snapchat-square',
                'Snowflake O' => 'fa-snowflake-o',
                'Sort' => 'fa-sort',
                'Sort Alpha Asc' => 'fa-sort-alpha-asc',
                'Sort Alpha Desc' => 'fa-sort-alpha-desc',
                'Sort Amount Asc' => 'fa-sort-amount-asc',
                'Sort Amount Desc' => 'fa-sort-amount-desc',
                'Sort Asc' => 'fa-sort-asc',
                'Sort Desc' => 'fa-sort-desc',
                'Sort Numeric Asc' => 'fa-sort-numeric-asc',
                'Sort Numeric Desc' => 'fa-sort-numeric-desc',
                'Soundcloud' => 'fa-soundcloud',
                'Space Shuttle' => 'fa-space-shuttle',
                'Spinner' => 'fa-spinner',
                'Spoon' => 'fa-spoon',
                'Spotify' => 'fa-spotify',
                'Square' => 'fa-square',
                'Square O' => 'fa-square-o',
                'Stack Exchange' => 'fa-stack-exchange',
                'Stack Overflow' => 'fa-stack-overflow',
                'Star' => 'fa-star',
                'Star Half' => 'fa-star-half',
                'Star Half O' => 'fa-star-half-o',
                'Star O' => 'fa-star-o',
                'Steam' => 'fa-steam',
                'Steam Square' => 'fa-steam-square',
                'Step Backward' => 'fa-step-backward',
                'Step Forward' => 'fa-step-forward',
                'Stethoscope' => 'fa-stethoscope',
                'Sticky Note' => 'fa-sticky-note',
                'Sticky Note O' => 'fa-sticky-note-o',
                'Stop' => 'fa-stop',
                'Stop Circle' => 'fa-stop-circle',
                'Stop Circle O' => 'fa-stop-circle-o',
                'Street View' => 'fa-street-view',
                'Strikethrough' => 'fa-strikethrough',
                'Stumbleupon' => 'fa-stumbleupon',
                'Stumbleupon Circle' => 'fa-stumbleupon-circle',
                'Subscript' => 'fa-subscript',
                'Subway' => 'fa-subway',
                'Suitcase' => 'fa-suitcase',
                'Sun O' => 'fa-sun-o',
                'Superpowers' => 'fa-superpowers',
                'Superscript' => 'fa-superscript',
                'Table' => 'fa-table',
                'Tablet' => 'fa-tablet',
                'Tachometer' => 'fa-tachometer',
                'Tag' => 'fa-tag',
                'Tags' => 'fa-tags',
                'Tasks' => 'fa-tasks',
                'Taxi' => 'fa-taxi',
                'Telegram' => 'fa-telegram',
                'Television' => 'fa-television',
                'Tencent Weibo' => 'fa-tencent-weibo',
                'Terminal' => 'fa-terminal',
                'Text Height' => 'fa-text-height',
                'Text Width' => 'fa-text-width',
                'Th' => 'fa-th',
                'Th Large' => 'fa-th-large',
                'Th List' => 'fa-th-list',
                'Themeisle' => 'fa-themeisle',
                'Thermometer Empty' => 'fa-thermometer-empty',
                'Thermometer Full' => 'fa-thermometer-full',
                'Thermometer Half' => 'fa-thermometer-half',
                'Thermometer Quarter' => 'fa-thermometer-quarter',
                'Thermometer Three Quarters' => 'fa-thermometer-three-quarters',
                'Thumb Tack' => 'fa-thumb-tack',
                'Thumbs Down' => 'fa-thumbs-down',
                'Thumbs O Down' => 'fa-thumbs-o-down',
                'Thumbs O Up' => 'fa-thumbs-o-up',
                'Thumbs Up' => 'fa-thumbs-up',
                'Ticket' => 'fa-ticket',
                'Times' => 'fa-times',
                'Times Circle' => 'fa-times-circle',
                'Times Circle O' => 'fa-times-circle-o',
                'Tint' => 'fa-tint',
                'Toggle Off' => 'fa-toggle-off',
                'Toggle On' => 'fa-toggle-on',
                'Trademark' => 'fa-trademark',
                'Train' => 'fa-train',
                'Transgender' => 'fa-transgender',
                'Transgender Alt' => 'fa-transgender-alt',
                'Trash' => 'fa-trash',
                'Trash O' => 'fa-trash-o',
                'Tree' => 'fa-tree',
                'Trello' => 'fa-trello',
                'Tripadvisor' => 'fa-tripadvisor',
                'Trophy' => 'fa-trophy',
                'Truck' => 'fa-truck',
                'Try' => 'fa-try',
                'Tty' => 'fa-tty',
                'Tumblr' => 'fa-tumblr',
                'Tumblr Square' => 'fa-tumblr-square',
                'Twitch' => 'fa-twitch',
                'Twitter' => 'fa-twitter',
                'Twitter Square' => 'fa-twitter-square',
                'Umbrella' => 'fa-umbrella',
                'Underline' => 'fa-underline',
                'Undo' => 'fa-undo',
                'Universal Access' => 'fa-universal-access',
                'University' => 'fa-university',
                'Unlock' => 'fa-unlock',
                'Unlock Alt' => 'fa-unlock-alt',
                'Upload' => 'fa-upload',
                'Usb' => 'fa-usb',
                'Usd' => 'fa-usd',
                'User' => 'fa-user',
                'User Circle' => 'fa-user-circle',
                'User Circle O' => 'fa-user-circle-o',
                'User Md' => 'fa-user-md',
                'User O' => 'fa-user-o',
                'User Plus' => 'fa-user-plus',
                'User Secret' => 'fa-user-secret',
                'User Times' => 'fa-user-times',
                'Users' => 'fa-users',
                'Venus' => 'fa-venus',
                'Venus Double' => 'fa-venus-double',
                'Venus Mars' => 'fa-venus-mars',
                'Viacoin' => 'fa-viacoin',
                'Viadeo' => 'fa-viadeo',
                'Viadeo Square' => 'fa-viadeo-square',
                'Video Camera' => 'fa-video-camera',
                'Vimeo' => 'fa-vimeo',
                'Vimeo Square' => 'fa-vimeo-square',
                'Vine' => 'fa-vine',
                'Vk' => 'fa-vk',
                'Volume Control Phone' => 'fa-volume-control-phone',
                'Volume Down' => 'fa-volume-down',
                'Volume Off' => 'fa-volume-off',
                'Volume Up' => 'fa-volume-up',
                'Weibo' => 'fa-weibo',
                'Weixin' => 'fa-weixin',
                'Whatsapp' => 'fa-whatsapp',
                'Wheelchair' => 'fa-wheelchair',
                'Wheelchair Alt' => 'fa-wheelchair-alt',
                'Wifi' => 'fa-wifi',
                'Wikipedia W' => 'fa-wikipedia-w',
                'Window Close' => 'fa-window-close',
                'Window Close O' => 'fa-window-close-o',
                'Window Maximize' => 'fa-window-maximize',
                'Window Minimize' => 'fa-window-minimize',
                'Window Restore' => 'fa-window-restore',
                'Windows' => 'fa-windows',
                'Wordpress' => 'fa-wordpress',
                'Wpbeginner' => 'fa-wpbeginner',
                'Wpexplorer' => 'fa-wpexplorer',
                'Wpforms' => 'fa-wpforms',
                'Wrench' => 'fa-wrench',
                'Xing' => 'fa-xing',
                'Xing Square' => 'fa-xing-square',
                'Y Combinator' => 'fa-y-combinator',
                'Yahoo' => 'fa-yahoo',
                'Yelp' => 'fa-yelp',
                'Yoast' => 'fa-yoast',
                'Youtube' => 'fa-youtube',
                'Youtube Play' => 'fa-youtube-play',
                'Youtube Square' => 'fa-youtube-square',
            ],
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }
}
