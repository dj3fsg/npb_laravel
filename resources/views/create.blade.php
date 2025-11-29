<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>試合登録画面</title>
</head>
<body>

    <form action="{{ url('npb/games') }}" method="POST" class="ms-3 mb-3">
        @csrf

        <!-- 上部：戻る & 登録ボタン -->
        <div class="d-flex justify-content-between mt-2 mb-3">
            <a href="{{ url('npb/games') }}" class="btn btn-outline-secondary btn-sm">一覧に戻る</a>
            <button type="submit" class="btn btn-primary btn-sm">登録する</button>
        </div>

        <!-- 試合日 -->
        <div class="form-area mb-3">
            <label for="game_date" class="form-label">試合日</label>
            <input
                type="date"
                name="game_date"
                id="game_date"
                class="form-control"
                value="{{ old('game_date') }}"
            >
        </div>

        <!-- 開始時間 -->
        <div class="form-area mb-3">
            <label for="game_time" class="form-label">開始時間</label>
            <input
                type="time"
                name="game_time"
                id="game_time"
                class="form-control"
                value="{{ old('game_time') }}"
            >
        </div>

        <!-- 対戦相手（ホーム / ビジター） -->
        <div class="form-area mb-3 d-flex align-items-center gap-2">
            <label for="home_team_id" class="form-label me-2">対戦カード</label>

            <select name="home_team_id" id="home_team_id" class="form-select w-auto">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}"
                        @selected(old('home_team_id') == $team->id)>
                        {{ $team->team_name }}
                    </option>
                @endforeach
            </select>

            <span>対</span>

            <select name="visitor_team_id" id="visitor_team_id" class="form-select w-auto">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}"
                        @selected(old('visitor_team_id') == $team->id)>
                        {{ $team->team_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- 球場 -->
        <div class="form-area mb-3">
            <label for="stadium_id" class="form-label">球場</label>
            <select name="stadium_id" id="stadium_id" class="form-select w-auto">
                @foreach ($stadiums as $stadium)
                    <option value="{{ $stadium->id }}"
                        @selected(old('stadium_id') == $stadium->id)>
                        {{ $stadium->stadium_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- スコア -->
        <div class="form-area mb-3 d-flex align-items-center gap-2">
            <label class="form-label me-2">スコア</label>

            <input
                type="number"
                name="home_score"
                id="home_score"
                class="form-control w-auto"
                value="{{ old('home_score') }}"
                min="0"
            >

            <span>対</span>

            <input
                type="number"
                name="visitor_score"
                id="visitor_score"
                class="form-control w-auto"
                value="{{ old('visitor_score') }}"
                min="0"
            >
        </div>

        <!-- 打順（1〜9番） ポジション＋選手 -->
        @for ($i = 1; $i <= 9; $i++)
            <x-pos-player-row
                :label="sprintf('%d番', $i)"
                :positionName="'batting['.$i.'][position_id]'"
                :playerName="'batting['.$i.'][player_id]'"
                :positions="$positions"
                :players="$players"
            />
        @endfor

    </form>

</body>
</html>