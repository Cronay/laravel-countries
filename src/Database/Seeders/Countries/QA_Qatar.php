<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class QA_Qatar extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Qatar';

        // Set the country's official name
        $this->official_name = 'State of Qatar';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'QA';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'QAT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '634';

        // Set the international dialing code
        $this->international_phone = '974';

        // Define the languages spoken in the country
        $this->languages = ['ar']; // Arabic is the official language

        // Define the top-level domain(s)
        $this->tld = ['.qa'];

        // Define alternative top-level domains
        $this->alternative_tlds = ['.com.qa', '.net.qa', '.org.qa', '.gov.qa']; // Common alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '120 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '80 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '99%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Qatar Computer Emergency Response Team (Q-CERT)';

        // List popular web technologies in Qatar
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'QA';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '289688';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Qatari riyal',
            // Currency code
            'code' => 'QAR',
            // Currency symbol
            'symbol' => '﷼',
            // Main unit
            'main_unit' => 'riyal',
            // Subunit
            'sub_unit' => 'dirham',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '50', '100', '500'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 2881053; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 11586; // km²

        // Set the capital city
        $this->capital = 'Doha';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Qatar',
                // Standard time offset
                'standard_time' => 'UTC+3',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1971-09-03'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Arab League',
            'Gulf Cooperation Council (GCC)',
            'Organization of Islamic Cooperation (OIC)',
            'World Trade Organization (WTO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 175.8; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni Islam)',
        ];

        // Describe the form of government
        $this->government = 'Absolute monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Qatar

        // Define bordering countries
        $this->borders = [
            ['name' => 'Saudi Arabia', 'iso_alpha_2' => 'SA'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇶🇦',
            // Unicode code points
            'uCode' => 'U+1F1F6 U+1F1E6',
            // HTML entities
            'html' => '&#x1F1F6;&#x1F1E6;',
            // CSS entities
            'css' => '\\1F1F6\\1F1E6',
            // Decimal Unicode entities
            'decimal' => '&#127478;&#127462;',
            // Direct UTF-8 string
            'utf8' => '🇶🇦',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF6\uD83C\uDDE6',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-qa:',
            // Hexadecimal entity
            'hex' => '&#x1F1F6;&#x1F1E6;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Maroon',
                // Web color name
                'web_name' => 'maroon',
                // Hexadecimal color code
                'hex' => '#8A1538',
                // RGB color values
                'rgb' => '138,21,56',
                // CMYK color values
                'cmyk' => '0,85,59,46',
                // HSL color values
                'hsl' => '343°,73%,31%',
                // HSV color values
                'hsv' => '343°,85%,54%',
                // Pantone color code
                'pantone' => '1955 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'White',
                // Web color name
                'web_name' => 'white',
                // Hexadecimal color code
                'hex' => '#FFFFFF',
                // RGB color values
                'rgb' => '255,255,255',
                // CMYK color values
                'cmyk' => '0,0,0,0',
                // HSL color values
                'hsl' => '0°,0%,100%',
                // HSV color values
                'hsv' => '0°,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '25.3548',
            // Longitude in decimal degrees
            'longitude' => '51.1839',
            // Degrees with decimal
            'dd' => '25.3548° N, 51.1839° E',
            // Degrees, minutes, seconds
            'dms' => '25°21\'17.28" N, 51°11\'2.04" E',
            // Degrees and decimal minutes
            'dm' => '25°21.288\' N, 51°11.034\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"qa"},"geometry":{"type":"Polygon","coordinates":[[[51.51759,25.383415],[51.510551,25.33083],[51.508888,25.310833],[51.508606,25.304165],[51.510551,25.299164],[51.513054,25.29472],[51.522774,25.289444],[51.541382,25.285],[51.561386,25.286388],[51.573608,25.28833],[51.581108,25.288055],[51.586388,25.285553],[51.595833,25.280277],[51.604439,25.274166],[51.606384,25.269165],[51.60611,25.263885],[51.604439,25.233061],[51.613884,25.214443],[51.614998,25.208885],[51.615829,25.178608],[51.612221,25.01722],[51.611664,25.010277],[51.57222,24.925831],[51.570274,24.921944],[51.563606,24.914165],[51.531387,24.876942],[51.511383,24.860832],[51.50666,24.85833],[51.5,24.850555],[51.497215,24.845833],[51.474998,24.787498],[51.47361,24.781387],[51.474632,24.761505],[51.437218,24.663055],[51.433884,24.659164],[51.370277,24.592777],[51.362221,24.586388],[51.341385,24.57111],[51.336937,24.57],[51.331665,24.572498],[51.32972,24.577221],[51.328049,24.595276],[51.33194,24.598331],[51.338051,24.599442],[51.342216,24.602776],[51.349442,24.631943],[51.346664,24.636108],[51.328331,24.652222],[51.271111,24.656944],[51.220276,24.641941],[51.214722,24.640274],[51.210274,24.630276],[51.212219,24.625275],[51.215164,24.620888],[51.209999,24.613331],[51.198883,24.603054],[51.183052,24.589443],[51.174721,24.583332],[51.111366,24.556042],[50.976662,24.576111],[50.969444,24.577774],[50.868332,24.686386],[50.863495,24.693615],[50.830956,24.749966],[50.838882,24.754166],[50.842773,24.757221],[50.853874,24.771255],[50.858604,24.77861],[50.863052,24.788609],[50.864998,24.793888],[50.865555,24.800831],[50.857216,24.870552],[50.849442,24.913609],[50.808052,25.056942],[50.802216,25.071663],[50.767662,25.129454],[50.766388,25.138885],[50.760277,25.186108],[50.755554,25.253609],[50.754997,25.266109],[50.751938,25.431389],[50.751938,25.491108],[50.753883,25.496666],[50.75666,25.501389],[50.763054,25.509163],[50.77861,25.522778],[50.784721,25.523888],[50.789993,25.521664],[50.807777,25.490276],[50.815552,25.470554],[50.820274,25.461388],[50.823883,25.457775],[50.830551,25.456665],[50.836662,25.457775],[50.841385,25.460278],[50.844719,25.464165],[50.842499,25.488331],[50.833328,25.565277],[50.827499,25.593052],[50.907219,25.588886],[50.948051,25.595554],[50.955551,25.602776],[50.975555,25.640831],[50.970551,25.643055],[50.950829,25.633888],[50.923332,25.624996],[50.917221,25.624165],[50.912773,25.626942],[50.892776,25.656387],[50.889999,25.660553],[50.888054,25.665554],[50.888054,25.712219],[50.88916,25.718609],[50.89444,25.727776],[50.898163,25.730736],[50.898605,25.767498],[50.901108,25.77972],[50.904442,25.783886],[50.923332,25.806942],[50.929718,25.807777],[50.938332,25.801941],[50.945549,25.79472],[50.948326,25.790276],[50.949715,25.77861],[50.952499,25.774166],[50.958885,25.775276],[50.962776,25.77861],[50.975273,25.802498],[50.975555,25.809444],[50.972496,25.82],[50.969719,25.824169],[50.962425,25.823946],[50.956108,25.824997],[50.95166,25.828053],[50.947777,25.837776],[50.948326,25.856388],[50.949997,25.861664],[50.998329,25.965275],[51.033333,26.036942],[51.038605,26.046387],[51.042496,26.049442],[51.171944,26.123608],[51.235832,26.150833],[51.241386,26.152775],[51.247772,26.15361],[51.25444,26.152775],[51.304993,26.129166],[51.313889,26.124443],[51.332222,26.113052],[51.34111,26.106941],[51.343887,26.102776],[51.345833,26.097775],[51.346382,26.085278],[51.343887,26.073055],[51.343605,26.046944],[51.343887,26.040833],[51.346664,26.036388],[51.389999,25.96722],[51.397217,25.959721],[51.410271,25.950832],[51.413296,25.949591],[51.478607,25.953053],[51.48555,25.953331],[51.498329,25.950554],[51.50444,25.948608],[51.514717,25.943886],[51.564438,25.911942],[51.568054,25.908333],[51.571938,25.898609],[51.593048,25.78083],[51.593887,25.769722],[51.593048,25.75],[51.587494,25.693886],[51.545555,25.624722],[51.53833,25.617496],[51.526665,25.614719],[51.507217,25.612499],[51.501106,25.611385],[51.492218,25.605831],[51.486107,25.591663],[51.484161,25.586388],[51.491169,25.550087],[51.476944,25.528889],[51.474159,25.524166],[51.472221,25.518887],[51.472496,25.512775],[51.476387,25.502777],[51.488609,25.48],[51.49472,25.472221],[51.50444,25.466663],[51.507217,25.462498],[51.50972,25.458054],[51.518326,25.439163],[51.521385,25.428608],[51.52166,25.422222],[51.51759,25.383415]]]}}]}';
    }
}
