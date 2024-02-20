<table>
    <thead>
        <tr>
            <td>user name</td>
            <td>phone number</td>
            <td>adress</td>
            <td>price</td>
            <td>quantity</td>
            
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
            <tr>
                <td>{{$data->first_name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address1}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->quantity}}</td>
            </tr>
        @endforeach
    </tbody>
</table>