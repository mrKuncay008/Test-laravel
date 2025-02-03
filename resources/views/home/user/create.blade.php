<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="w-full h-auto overflow-x-hidden flex flex-col">
                <main class="w-full flex-grow p-6">
                    <div class="w-full mt-2">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-list mr-3"></i> User Details
                        </p>
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="name" class="block mb-2 text-sm font-medium text-black">Name</label>
                            <input type="text" id="name" value="{{ old('name') }}"  name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                        <div class="mb-1">
                            <label for="email" class="block mb-2 text-sm font-medium text-black">Email</label>
                            <input type="email" id="email" value="{{ old('email') }}" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                        </div>
                              <div class="mb-1">
                                <label for="start" class="block mb-2 text-sm font-medium text-black">Password</label>
                                <input type="password" id="password" value="{{ old('password') }}" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                            </div>
                            <div class="mb-1">
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-black">Password Confirmation</label>
                                <input type="password" id="password_confirmation" value="{{ old('password_confirmation') }}"  name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
        
                        <div class="mb-1">
                            <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900 text-black">Role</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="selectType" name="role_id">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                          </select>
                        </div>
                        <div class="mb-1">
                        </div>
                        {{--  --}}
                        </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="px-4 py-1 btn btn-outline-success rounded-lg">Add Product</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>