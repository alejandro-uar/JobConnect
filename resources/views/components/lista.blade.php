<div>
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex justify-between gap-x-6 py-5">
          <div class="flex min-w-0 gap-x-4">
            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ asset('storage/images/' . $user->uri) }}" alt="">
            <div class="min-w-0 flex-auto">
              <p class="text-sm font-semibold leading-6 text-gray-900">{{$user->name}}</p>
              <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$user->email}} | {{$user->role ? $user->role->role_name : 'Sin rol asignado'}}</p>
            </div>
          </div>
          <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
            <p class="text-sm leading-6 text-gray-900">{{$slot}}</p>
          </div>
        </li>
      </ul>
      
</div>