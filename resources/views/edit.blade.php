<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集・詳細画面</title>
</head>
<body>

    <div class="d-flex justify-content-between mt-2">
      <a href="{{ url('npb/games') }}">>>戻る</a>
      <a href="{{ url('npb/create') }}">>>確定する</a>
    </div>
    <form action="{{ url('game/update/'.$game->id) }}" method="POST">
        @csrf

        <div class="ms-3 mb-3">

            <!-- 試合日 -->
            <div class="form-area mb-3">
                <label for="game_date" class="form-label">試合日</label>
                <input type="date"
                    name="game_date"
                    id="game_date"
                    class="form-control"
                    value="{{ $game->game_datetime->format('Y-m-d') }}">
            </div>

            <!-- 開始時間 -->
            <div class="form-area mb-3">
                <label for="game_time" class="form-label">開始時間</label>
                <input type="time"
                    name="game_time"
                    id="game_time"
                    class="form-control"
                    value="{{ $game->game_datetime->format('H:i') }}">
            </div>

            <!-- 対戦相手 -->
            <div class="form-area mb-3 d-flex align-items-center gap-2">
                <label for="home_team" class="form-label me-2">対戦相手</label>

                <select name="home_team" class="form-select w-auto">
                    <option value="{{ $team->id }}">{{ $team->team_name }}</option>
                </select>

                <span>対</span>

                <select name="visiter_team" class="form-select w-auto">
                    <option value="{{ $team->id }}">{{ $team->team_name }}</option>
                </select>
            </div>
            <!-- 球場 -->
            <div class="form-area mb-3">
                <label for="stadiums" class="form-label">球場</label>
                <select name="stadium" class="form-select w-auto">
                    <option value="{{ $stadium->id }}">{{ $stadium->stadium_name }}</option>
                </select>
            </div>
             <!-- スコア -->
            <div class="form-area mb-3 d-flex align-items-center gap-2">
                <label for="home_team" class="form-label me-2">対戦相手</label>

                <input type="number"
                    name="home_score"
                    id="home_score"
                    class="form-control"
                    value="{{ $game->home_score }}">

                <span>対</span>

                <select name="visiter_team" class="form-select w-auto">
                    <input type="number"
                    name="visiter_score"
                    id="visiter_score"
                    class="form-control"
                    value="{{ $game->home_score }}">
                </select>
            </div>
          @for ($i = 1; $i <= 9; $i++)
            <x-pos-player-row
                :label="sprintf('%d番', $i)"
                :positionName="'batting['.$i.'][position_id]'"
                :playerName="'batting['.$i.'][player_id]'"
                :positions="$positions"
                :players="$players"
                :positionValue="$batting[$i]['position_id'] ?? null"
                :playerValue="$batting[$i]['player_id'] ?? null"
            />
          @endfor



        </div>

    </form>

</body>
</html>
