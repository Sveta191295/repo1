<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table class="table">  
            <thead>
                <tr>
                    <th >id</th>
                    <th>make</th>
                    <th>model</th>
                    <th>year</th>
                    <th>mileage</th>
                    <th>color</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)    
                <tr>
                    <th>{{$car->id}}</th>
                    <td>{{$car->make}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->year}}</td>
                    <td>{{$car->mileage}}</td>
                    <td>{{$car->color}}</td>
                    <td>{{$car->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>