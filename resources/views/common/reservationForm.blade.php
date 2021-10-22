<div class="container">

        <a href="">◀︎前の一週間</a>

        <a href="">次の一週間▶︎</a>

        <table class="table table-bordered">
            <tr>
              <th></th>
              @foreach ($weeks as $week)
                <th>{{ $week }}</th>
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
