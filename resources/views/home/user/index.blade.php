@extends('master')
@section('users')
    <div class="w-full h-auto overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Users</h1>

            <div class="w-full mt-2">
                <p class="text-xl pb-6 flex items-center">
                    <i class="fas fa-list mr-3"></i> Users Records
                </p>
                <button type="button" class="px-4 mb-2 py-1 btn btn-outline-primary rounded-lg mb-2"
                 data-toggle="modal" data-target="#exampleModal">
                    Add User
                </button>
                <div class="bg-white overflow-auto drop-shadow-md rounded-xl">
                    <table class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Role</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">{{ $user->id }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $user->name }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">admin</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                                    type="button"
                                    onclick="">Edit</button>
                                    <form type="submit" method="POST" style="display: inline" action="" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {!! $users->links() !!}
        </main>
    </div>
    @include('home.user.create')
@endsection