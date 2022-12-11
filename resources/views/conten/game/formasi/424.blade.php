<div class="row mt-4 ">
    <p class="border-bottom">Penyerang</p>
    <div class="col">
        <select class="form-select form-select-sm" aria-label=".form-select-lg example">
            <option selected>Penyerang kiri</option>
            @foreach ($pemain as $item)
                <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
        <select class="form-select form-select-sm" aria-label=".form-select-lg example">
            <option selected>Penyerang tengah kiri</option>
            @foreach ($pemain as $item)
                <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
        <select class="form-select form-select-sm" aria-label=".form-select-lg example">
            <option selected>Penyerang tengah kanan</option>
            @foreach ($pemain as $item)
                <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
        <select class="form-select form-select-sm" aria-label=".form-select-lg example">
            <option selected>Penyerang kanan</option>
            @foreach ($pemain as $item)
                <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
        </select>
    </div>

    <div class="row mt-4">
        <p class="border-bottom">tengah</p>
        <div class="col">
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>tengah kiri</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>tengah kanan</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="row mt-4 ">
        <p class="border-bottom">Belakang</p>
        <div class="col">
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Belakang kiri</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Belakang tengah kiri</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>belakang tengah kanan</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>belakang kanan</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-4 ">
        <p class="border-bottom">Kiper</p>
        <div class="col">
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Kiper</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>