<div class="row mt-4 ">
    <p class="border-bottom">Penyerang</p>
    <div class="col">
        <select name="penyerang-kiri" class="form-select form-select-sm" aria-label=".form-select-lg example">
            <option selected>Penyerang kiri</option>
            @foreach ($pemain as $item)
                <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
        <select name="penyerang" class="form-select form-select-sm" aria-label=".form-select-lg example">
            <option selected>Penyerang tengah</option>
            @foreach ($pemain as $item)
            <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="col">
        <select name="penyerang-kanan" class="form-select form-select-sm" aria-label=".form-select-lg example">
            <option selected>penyerang kanan</option>
            @foreach ($pemain as $item)
            <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="row mt-4">
        <p class="border-bottom">Gelandang</p>
        <div class="col">
            <select name="gelandang-kiri" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Gelandang kiri</option>
                @foreach ($pemain as $item)
                <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="gelandang-tengah" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Gelandang tengah </option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="gelandang-kanan" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Gelandang kanan</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="row mt-4 ">
        <p class="border-bottom">Belakang</p>
        <div class="col">
            <select name="belakang-kiri" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Belakang kiri</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="belakang-tengah-kiri" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Belakang tengah kiri</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="belakang-tengah-kanan" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>belakang tengah kanan</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="belakang-kanan" class="form-select form-select-sm" aria-label=".form-select-lg example">
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
            <select name="kiper" class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected>Kiper</option>
                @foreach ($pemain as $item)
                    <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>