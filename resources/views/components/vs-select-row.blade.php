<div class="row mb-3 align-items-center">
    <label class="col-sm-2 col-form-label">守備</label>

    <div class="col-sm-10">
        <div class="d-flex align-items-center gap-2">
            {{-- 左：ポジション --}}
            <select name="position_id" class="form-select w-auto">
                @foreach ($positions as $position)
                    <option value="{{ $position->id }}"
                        @selected(old('position_id', $selectedPositionId ?? '') == $position->id)>
                        {{ $position->position_name }}
                    </option>
                @endforeach
            </select>

            <span>×</span>

            {{-- 右：選手 --}}
            <select name="player_id" class="form-select w-auto">
                @foreach ($players as $player)
                    <option value="{{ $player->id }}"
                        @selected(old('player_id', $selectedPlayerId ?? '') == $player->id)>
                        {{ $player->player_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>