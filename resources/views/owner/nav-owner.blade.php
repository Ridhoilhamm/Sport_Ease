<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class=" bg-white fixed-top p-2">

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{route('profile-penjaga')}}">
                <div class="d-flex align-items-center ms-1">
                    <img src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                        style="height: 40px; width:39px; border:2px solid #ddd0d0;" class="rounded-circle me-2 pad"
                        alt="Profile">

                    <div>
                        <p class="m-0 " style="font-size: 12px">hallo</p>
                        <h5 class="m-0 fw-semi-bold" style="font-size: 15px;">{{ auth()->user()->name }}</h5>


                    </div>
                </div>
            </a>
            <div class="d-flex align-items-center py-2 me-1">
                <img src="{{ asset('image/logo.png') }}" style="height:40px; width:40px;" alt="Logo">
            </div>
        </div>

    </div>

</nav>
