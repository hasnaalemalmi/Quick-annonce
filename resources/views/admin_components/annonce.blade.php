@extends('admin')

@section('content-admin')
<table class="  w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
    <tr>
    
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">titre</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">prix</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">telephone</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">description</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">ville_id</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">categorie_id</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">user_id</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">photo_1</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">photo_2</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">photo_3</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">photo_4</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">photo_5</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border "colspan="2">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($annonces as $ann)
      <tr class="border-b border-gray-200 dark:border-gray-700">
       
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $ann->titre }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $ann->prix }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $ann->telephone }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $ann->description }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $ann->ville->ville_name }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $ann->categorie->libelle }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $ann->user->name }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border " >
        <img src="{{ asset('photo/' . $ann->photo_1) }}" alt="etudiant photo" class="h-8 w-8 mr-3 rounded">
        </td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">
        <img src="{{ asset('photo/' . $ann->photo_2) }}" alt="etudiant photo" class="h-8 w-8 mr-3 rounded">
        </td>
       
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">
        <img src="{{ asset('photo/' . $ann->photo_3) }}" alt="etudiant photo" class="h-8 w-8 mr-3 rounded">
        </td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">
        <img src="{{ asset('photo/' . $ann->photo_4) }}" alt="etudiant photo" class="h-8 w-8 mr-3 rounded">
        </td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">
        <img src="{{ asset('photo/' . $ann->photo_5) }}" alt="etudiant photo" class="h-8 w-8 mr-3 rounded">
        </td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 flex justify-center items-center  border" >
        <form method="POST" action="{{ route('Bien.Valider', $ann->id) }} " >
                              @csrf
                              @method('PUT')
                              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Valider
</button>
                           </form>
                        </td >
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">
                        <form method="POST" action="{{ route('Non.Valider', $ann->id) }} " >
                              @csrf
                              @method('PUT')
                              <button type="submit"
                              class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                          Non valider
                              </button>
                           </form>
                        </td>
        </td>
       
       
      </tr>
    @endforeach
  </tbody>
</table>
{{ $annonces->links() }}
@endsection