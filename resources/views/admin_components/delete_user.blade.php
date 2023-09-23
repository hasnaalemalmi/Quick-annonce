@extends('admin')

@section('content-admin')
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
    <tr>
    
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">Id</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">Nom</th>
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border">Email</th>
      
   
      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800  border ">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $us)
      <tr class="border-b border-gray-200 dark:border-gray-700">
       
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $us->id }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $us->name }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">{{ $us->email }}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800  border">
        <form action="{{ route('admin_components.delete-user',$us->id) }}" method="Post">
                               
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Supprimer</button>
                            </form> 

        </td>

       
       
      </tr>
    @endforeach
  </tbody>
</table>
{{ $users->links() }}

@endsection