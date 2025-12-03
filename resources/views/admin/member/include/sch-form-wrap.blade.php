<form id="searchF" name="searchF" action="{{ route($routeName) }}" class="sch-form-wrap">
    <fieldset>
        <legend class="hide">검색</legend>
        <div class="table-wrap">
            <table class="cst-table">
                <caption class="hide">
                    <colgroup>
                        <col style="width: 18%;">
                        <col style="width: 32%;">
                        <col style="width: 18%;">
                        <col style="width: 32%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th scope="row">Country of Regidence</th>
                        <td class="text-left">
                            <select name="country" id="country" class="form-item">
                                <option value="">Country choice</option>
                                @foreach($country_list as $key => $val)
                                    <option value="{{ $key }}" {{ ((request()->country ?? '') == $key) ? 'selected' : '' }}>{{ $val['name'] }}</option>
                                @endforeach
                            </select>
                        </td>

                        <th scope="row">Nationality</th>
                        <td class="text-left">
                            <select name="nationality" id="nationality" class="form-item">
                                <option value="">Nationality choice</option>
                                @foreach($country_list as $key => $val)
                                    <option value="{{ $key }}" {{ ((request()->nationality ?? '') == $key) ? 'selected' : '' }}>{{ $val['name'] }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">ID</th>
                        <td class="text-left">
                            <input type="text" name="uid" value="{{ request()->uid ?? '' }}" class="form-item">
                        </td>

                        <th scope="row">Name</th>
                        <td class="text-left">
                            <input type="text" name="name" value="{{ request()->name ?? '' }}" class="form-item">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Affiliation</th>
                        <td  class="text-left">
                            <input type="text" name="affiliation" value="{{ request()->affiliation ?? '' }}" class="form-item">
                        </td>

                        <th scope="row">의사면허번호</th>
                        <td  class="text-left">
                            <input type="text" name="license_number" value="{{ request()->license_number ?? '' }}" class="form-item">
                        </td>
                    </tr>
                    </tbody>
                </caption>
            </table>
        </div>

        <input type="hidden" name="li_page" value="{{ $li_page }}">

        <div class="btn-wrap text-center">
            <button type="submit" class="btn btn-type1 color-type17">검색</button>
            <a href="{{ route($routeName) }}" class="btn btn-type1 color-type18">검색 초기화</a>

            @switch($routeName)
                @case('member.withdrawal')
                    <a href="{{ route('member.excel', ['case' => 'withdrawal'] + request()->except(['page'])) }}" class="btn btn-type1 color-type19">Get Excel File</a>
                    @break

                @case('member.domestic')
                    <a href="{{ route('member.excel', ['case' => 'domestic'] + request()->except(['page'])) }}" class="btn btn-type1 color-type19">Get Excel File</a>
                    @break

                @case('member.overseas')
                    <a href="{{ route('member.excel', ['case' => 'overseas'] + request()->except(['page'])) }}" class="btn btn-type1 color-type19">Get Excel File</a>
                    @break

                @default
                    <a href="{{ route('member.excel', request()->except(['page'])) }}" class="btn btn-type1 color-type19">Get Excel File</a>
                    @break
            @endswitch
        </div>
    </fieldset>
</form>
