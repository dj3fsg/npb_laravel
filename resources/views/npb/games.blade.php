<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>試合結果一覧</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <h1>試合結果一覧</h1>
   <div class="w-75 p-3">
    <table class="table table-bordered mt-2">
         <tr class="border-0">
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="border-0"><a href="{{ url('npb/create') }}">>>登録する</a></td>
        </tr>
        <tr>
            <th>試合日</th>
            <th>開始時間</th>
            <th>試合相手</th>
            <th>球場</th>
            <th>結果</th>
            <th></th>
        </tr>

        @foreach($games as $game)
        <tr>
            <td>{{ $game['game_datetime']->format('Y/m/d') }}</td>
            <td>{{ $game['game_datetime']->format('H:i') }}</td>
            <td>{{ $game->homeTeam->team_name. '対' . $game->visiterTeam->team_name }}</td>
            <td>{{ $game['home_score']. '対' . $game['visiter_score'] }}</td>
            <td><a href="{{ url('npb/edit/'.$game->id) }}">>>編集する</a></td>
        </tr>
        @endforeach
    </table>
    </div>
  
</body>
</html>