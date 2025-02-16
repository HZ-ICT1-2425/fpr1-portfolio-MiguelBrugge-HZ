<x-layout.main>
    <section class="page">
        <h1 class="text-center">{{ $action == 'create' ? 'Create new' : 'Edit' }} {{ $itemName }}</h1>
        <br>

        <form action="{{ $submitRoute }}" method="POST" class="w-50 mx-auto mt-2" enctype="multipart/form-data">
            @csrf
            @if($action == 'edit')
                @method('PUT')
            @endif
            <div id="create-edit-wrapper" class="d-flex flex-column gap-4 h-50 px-2 pb-2">
                @if ($errors->any())
                    <div class="d-flex flex-column gap-2">
                        @foreach ($errors->all() as $error)
                            <p class="d-block m-0 text-danger text-center">
                                {{ $error }}
                            </p>
                        @endforeach
                    </div>
                @endif
                {{ $slot }}
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <x-ui.button :link="$cancelRoute" ghostButton type="button">
                    Cancel
                </x-ui.button>
                <x-ui.button>
                    {{ $action == 'create' ? 'Create' : 'Edit' }}
                </x-ui.button>
            </div>
        </form>
    </section>
</x-layout.main>
