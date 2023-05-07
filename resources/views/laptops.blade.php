<x-layout>
    <div class="laptops">
        <h1>
            Top 5 Laptop in the Year
        </h1>
        <ul class="list-group">
            @foreach ($laptops as $laptop)
                <li class="list-group-item text-center"> {{$laptop['manufacturer']}} {{ $laptop['type'] }}</li>
                <br>
            @endforeach
        </ul>
        <div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>Add Laptop</h2>
            <form action="/add" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Manufacturer</label>
                    <input type="text" class="form-control" name="manufacturer">
                </div>
                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <input type="text" class="form-control" name="type">
                </div>

                <div class="mb-3">
                    <label class="form-label">Display</label>
                    <input type="text" class="form-control" name="display">
                </div>

                <div class="mb-3">
                    <label class="form-label">Memory</label>
                    <input type="number" class="form-control" name="memory">
                </div>

                <div class="mb-3">
                    <label class="form-label">Hard disk</label>
                    <input type="number" class="form-control" name="harddisk">
                </div>

                <div class="mb-3">
                    <label class="form-label">Video controller</label>
                    <input type="text" class="form-control" name="Videocontroller">
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pieces</label>
                    <input type="number" class="form-control" name="pieces">
                </div>

                <div class="mb-3">
                    <label class="form-label">Processor Type</label>
                    <select class="form-select" name="processorid">
                        @foreach ($processors as $proci)
                            <option value="{{ $proci["id"] }}"> {{ $proci["manufacturer"] }}  {{ $proci["type"] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Operating System Type</label>
                    <select class="form-select" name="opsystemid" >
                        @foreach ($Ops as $op)
                            <option value="{{ $op["id"] }}">{{ $op["osname"] }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</x-layout>
