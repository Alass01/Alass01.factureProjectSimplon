<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" />
    <title>INSCRIPTION</title>
</head>
<body>

    @include('components.error')
    <form action="{{ route('register1') }}" method="post">
        @csrf

  <!-- start navbar -->
   <!-- Image and text -->

<div class="flex justify-between bg-red-500 w-full h-screen">
    <div class="h-full w-2/3">
      <img class="h-full" src="{{ asset('icon/connect1.png') }}" alt="" srcset="">
    </div>
    <div class="h-full w-2/3 bg-blue-500">
      <!--
    This example requires some changes to your config:

    ```
    // tailwind.config.js
    module.exports = {
      // ...
      plugins: [
        // ...
        require('@tailwindcss/forms'),
      ],
    }
    ```
  -->
  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">INSCRIPTION</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Bienvenu sur la plateforme qui boostera votre business.</p>
    </div>
    <form  class="mx-auto mt-16 max-w-xl sm:mt-20">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
          <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
          <div class="mt-2.5">
            <input type="text" name="name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
          <div class="mt-2.5">
            <input type="text" name="lastname" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
          <div class="mt-2.5">
            <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
          <div class="mt-2.5">
            <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
          <div class="relative mt-2.5">
            <div class="absolute inset-y-0 left-0 flex items-center">
              <label for="country" class="sr-only">Pays</label>
              <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                <option value="France" selected="selected">France </option>

  <option value="Afghanistan">Afghanistan </option>
  <option value="Afrique_Centrale">Afrique_Centrale </option>
  <option value="Afrique_du_sud">Afrique_du_Sud </option>
  <option value="Albanie">Albanie </option>
  <option value="Algerie">Algerie </option>
  <option value="Allemagne">Allemagne </option>
  <option value="Andorre">Andorre </option>
  <option value="Angola">Angola </option>
  <option value="Anguilla">Anguilla </option>
  <option value="Arabie_Saoudite">Arabie_Saoudite </option>
  <option value="Argentine">Argentine </option>
  <option value="Armenie">Armenie </option>
  <option value="Australie">Australie </option>
  <option value="Autriche">Autriche </option>
  <option value="Azerbaidjan">Azerbaidjan </option>

  <option value="Bahamas">Bahamas </option>
  <option value="Bangladesh">Bangladesh </option>
  <option value="Barbade">Barbade </option>
  <option value="Bahrein">Bahrein </option>
  <option value="Belgique">Belgique </option>
  <option value="Belize">Belize </option>
  <option value="Benin">Benin </option>
  <option value="Bermudes">Bermudes </option>
  <option value="Bielorussie">Bielorussie </option>
  <option value="Bolivie">Bolivie </option>
  <option value="Botswana">Botswana </option>
  <option value="Bhoutan">Bhoutan </option>
  <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
  <option value="Bresil">Bresil </option>
  <option value="Brunei">Brunei </option>
  <option value="Bulgarie">Bulgarie </option>
  <option value="Burkina_Faso">Burkina_Faso </option>
  <option value="Burundi">Burundi </option>

  <option value="Caiman">Caiman </option>
  <option value="Cambodge">Cambodge </option>
  <option value="Cameroun">Cameroun </option>
  <option value="Canada">Canada </option>
  <option value="Canaries">Canaries </option>
  <option value="Cap_vert">Cap_Vert </option>
  <option value="Chili">Chili </option>
  <option value="Chine">Chine </option>
  <option value="Chypre">Chypre </option>
  <option value="Colombie">Colombie </option>
  <option value="Comores">Colombie </option>
  <option value="Congo">Congo </option>
  <option value="Congo_democratique">Congo_democratique </option>
  <option value="Cook">Cook </option>
  <option value="Coree_du_Nord">Coree_du_Nord </option>
  <option value="Coree_du_Sud">Coree_du_Sud </option>
  <option value="Costa_Rica">Costa_Rica </option>
  <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
  <option value="Croatie">Croatie </option>
  <option value="Cuba">Cuba </option>

  <option value="Danemark">Danemark </option>
  <option value="Djibouti">Djibouti </option>
  <option value="Dominique">Dominique </option>

  <option value="Egypte">Egypte </option>
  <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
  <option value="Equateur">Equateur </option>
  <option value="Erythree">Erythree </option>
  <option value="Espagne">Espagne </option>
  <option value="Estonie">Estonie </option>
  <option value="Etats_Unis">Etats_Unis </option>
  <option value="Ethiopie">Ethiopie </option>

  <option value="Falkland">Falkland </option>
  <option value="Feroe">Feroe </option>
  <option value="Fidji">Fidji </option>
  <option value="Finlande">Finlande </option>
  <option value="France">France </option>

  <option value="Gabon">Gabon </option>
  <option value="Gambie">Gambie </option>
  <option value="Georgie">Georgie </option>
  <option value="Ghana">Ghana </option>
  <option value="Gibraltar">Gibraltar </option>
  <option value="Grece">Grece </option>
  <option value="Grenade">Grenade </option>
  <option value="Groenland">Groenland </option>
  <option value="Guadeloupe">Guadeloupe </option>
  <option value="Guam">Guam </option>
  <option value="Guatemala">Guatemala</option>
  <option value="Guernesey">Guernesey </option>
  <option value="Guinee">Guinee </option>
  <option value="Guinee_Bissau">Guinee_Bissau </option>
  <option value="Guinee equatoriale">Guinee_Equatoriale </option>
  <option value="Guyana">Guyana </option>
  <option value="Guyane_Francaise ">Guyane_Francaise </option>

  <option value="Haiti">Haiti </option>
  <option value="Hawaii">Hawaii </option>
  <option value="Honduras">Honduras </option>
  <option value="Hong_Kong">Hong_Kong </option>
  <option value="Hongrie">Hongrie </option>

  <option value="Inde">Inde </option>
  <option value="Indonesie">Indonesie </option>
  <option value="Iran">Iran </option>
  <option value="Iraq">Iraq </option>
  <option value="Irlande">Irlande </option>
  <option value="Islande">Islande </option>
  <option value="Israel">Israel </option>
  <option value="Italie">italie </option>

  <option value="Jamaique">Jamaique </option>
  <option value="Jan Mayen">Jan Mayen </option>
  <option value="Japon">Japon </option>
  <option value="Jersey">Jersey </option>
  <option value="Jordanie">Jordanie </option>

  <option value="Kazakhstan">Kazakhstan </option>
  <option value="Kenya">Kenya </option>
  <option value="Kirghizstan">Kirghizistan </option>
  <option value="Kiribati">Kiribati </option>
  <option value="Koweit">Koweit </option>

  <option value="Laos">Laos </option>
  <option value="Lesotho">Lesotho </option>
  <option value="Lettonie">Lettonie </option>
  <option value="Liban">Liban </option>
  <option value="Liberia">Liberia </option>
  <option value="Liechtenstein">Liechtenstein </option>
  <option value="Lituanie">Lituanie </option>
  <option value="Luxembourg">Luxembourg </option>
  <option value="Lybie">Lybie </option>

  <option value="Macao">Macao </option>
  <option value="Macedoine">Macedoine </option>
  <option value="Madagascar">Madagascar </option>
  <option value="Madère">Madère </option>
  <option value="Malaisie">Malaisie </option>
  <option value="Malawi">Malawi </option>
  <option value="Maldives">Maldives </option>
  <option value="Mali">Mali </option>
  <option value="Malte">Malte </option>
  <option value="Man">Man </option>
  <option value="Mariannes du Nord">Mariannes du Nord </option>
  <option value="Maroc">Maroc </option>
  <option value="Marshall">Marshall </option>
  <option value="Martinique">Martinique </option>
  <option value="Maurice">Maurice </option>
  <option value="Mauritanie">Mauritanie </option>
  <option value="Mayotte">Mayotte </option>
  <option value="Mexique">Mexique </option>
  <option value="Micronesie">Micronesie </option>
  <option value="Midway">Midway </option>
  <option value="Moldavie">Moldavie </option>
  <option value="Monaco">Monaco </option>
  <option value="Mongolie">Mongolie </option>
  <option value="Montserrat">Montserrat </option>
  <option value="Mozambique">Mozambique </option>

  <option value="Namibie">Namibie </option>
  <option value="Nauru">Nauru </option>
  <option value="Nepal">Nepal </option>
  <option value="Nicaragua">Nicaragua </option>
  <option value="Niger">Niger </option>
  <option value="Nigeria">Nigeria </option>
  <option value="Niue">Niue </option>
  <option value="Norfolk">Norfolk </option>
  <option value="Norvege">Norvege </option>
  <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
  <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

  <option value="Oman">Oman </option>
  <option value="Ouganda">Ouganda </option>
  <option value="Ouzbekistan">Ouzbekistan </option>

  <option value="Pakistan">Pakistan </option>
  <option value="Palau">Palau </option>
  <option value="Palestine">Palestine </option>
  <option value="Panama">Panama </option>
  <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
  <option value="Paraguay">Paraguay </option>
  <option value="Pays_Bas">Pays_Bas </option>
  <option value="Perou">Perou </option>
  <option value="Philippines">Philippines </option>
  <option value="Pologne">Pologne </option>
  <option value="Polynesie">Polynesie </option>
  <option value="Porto_Rico">Porto_Rico </option>
  <option value="Portugal">Portugal </option>

  <option value="Qatar">Qatar </option>

  <option value="Republique_Dominicaine">Republique_Dominicaine </option>
  <option value="Republique_Tcheque">Republique_Tcheque </option>
  <option value="Reunion">Reunion </option>
  <option value="Roumanie">Roumanie </option>
  <option value="Royaume_Uni">Royaume_Uni </option>
  <option value="Russie">Russie </option>
  <option value="Rwanda">Rwanda </option>

  <option value="Sahara Occidental">Sahara Occidental </option>
  <option value="Sainte_Lucie">Sainte_Lucie </option>
  <option value="Saint_Marin">Saint_Marin </option>
  <option value="Salomon">Salomon </option>
  <option value="Salvador">Salvador </option>
  <option value="Samoa_Occidentales">Samoa_Occidentales</option>
  <option value="Samoa_Americaine">Samoa_Americaine </option>
  <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
  <option value="Senegal">Senegal </option>
  <option value="Seychelles">Seychelles </option>
  <option value="Sierra Leone">Sierra Leone </option>
  <option value="Singapour">Singapour </option>
  <option value="Slovaquie">Slovaquie </option>
  <option value="Slovenie">Slovenie</option>
  <option value="Somalie">Somalie </option>
  <option value="Soudan">Soudan </option>
  <option value="Sri_Lanka">Sri_Lanka </option>
  <option value="Suede">Suede </option>
  <option value="Suisse">Suisse </option>
  <option value="Surinam">Surinam </option>
  <option value="Swaziland">Swaziland </option>
  <option value="Syrie">Syrie </option>

  <option value="Tadjikistan">Tadjikistan </option>
  <option value="Taiwan">Taiwan </option>
  <option value="Tonga">Tonga </option>
  <option value="Tanzanie">Tanzanie </option>
  <option value="Tchad">Tchad </option>
  <option value="Thailande">Thailande </option>
  <option value="Tibet">Tibet </option>
  <option value="Timor_Oriental">Timor_Oriental </option>
  <option value="Togo">Togo </option>
  <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
  <option value="Tristan da cunha">Tristan de cuncha </option>
  <option value="Tunisie">Tunisie </option>
  <option value="Turkmenistan">Turmenistan </option>
  <option value="Turquie">Turquie </option>

  <option value="Ukraine">Ukraine </option>
  <option value="Uruguay">Uruguay </option>

  <option value="Vanuatu">Vanuatu </option>
  <option value="Vatican">Vatican </option>
  <option value="Venezuela">Venezuela </option>
  <option value="Vierges_Americaines">Vierges_Americaines </option>
  <option value="Vierges_Britanniques">Vierges_Britanniques </option>
  <option value="Vietnam">Vietnam </option>

  <option value="Wake">Wake </option>
  <option value="Wallis et Futuma">Wallis et Futuma </option>

  <option value="Yemen">Yemen </option>
  <option value="Yougoslavie">Yougoslavie </option>

  <option value="Zambie">Zambie </option>
  <option value="Zimbabwe">Zimbabwe </option>
              </select>
              <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </div>
            <input type="tel" name="phone" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">Password</label>
        <div class="mt-2.5">
          <input type="text" name="password" id="password" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

          SEND

        </button>

      </div>
    </form>
  </div>

    </div>
  </div>
    <!-- start navbar -->

    <script src="js/script.js"></script>
    </form>
</body>
</html>
