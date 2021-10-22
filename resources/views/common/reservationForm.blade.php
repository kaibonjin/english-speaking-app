<div class="container">

        <div>
            <a href="?page={{$prevWeek}}">前の週</a>
            <a href="?page={{$nextWeek}}">次の週</a>
        </div>

        <table class="table table-bordered">
            <tr>
              <th></th>
              @foreach ($week as $day)
                <th>{{ $day }}</th>
              @endforeach
            </tr>
            <tr>
            <td class="font-weight-bold">10:00</td>
            <td></td>
            <td>1</td>
            <td>5</td>
            </tr>
            <tr>
            <td class="font-weight-bold">14:00</td>
            <td></td>
            <td>1</td>
            <td>5</td>
            </tr>
            <tr>
            <td class="font-weight-bold">17:00</td>
            <td></td>
            <td>1</td>
            <td>5</td>
            </tr>
        </table>
    </div>
