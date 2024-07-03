<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; cursor: pointer; }
        .event { background-color: lightblue; }
        .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); }
        .modal-content { background: white; margin: 15% auto; padding: 20px; width: 300px; }
    </style>
    <script>
        function openModal(day) {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('day').value = day;
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</head>
<body>
    <h1>July 2024</h1>
    <form action="{{ route('calendar.update') }}" method="POST">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>Su</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                    $firstDayOfMonth = date('N', strtotime("$year-$month-01"));
                    $currentDay = 1;
                @endphp
                <tr>
                    @for($i = 1; $i < $firstDayOfMonth; $i++)
                        <td></td>
                    @endfor
                    @for($i = $firstDayOfMonth; $i <= 7; $i++)
                        <td onclick="openModal({{ $currentDay }})" class="{{ isset($events[$currentDay]) ? 'event' : '' }}">
                            {{ $currentDay }}
                            @if(isset($events[$currentDay]))
                                <div>{{ $events[$currentDay]['event'] }} at {{ $events[$currentDay]['time'] }}</div>
                            @endif
                            @php $currentDay++; @endphp
                        </td>
                    @endfor
                </tr>
                @while($currentDay <= $daysInMonth)
                    <tr>
                        @for($i = 1; $i <= 7; $i++)
                            @if($currentDay <= $daysInMonth)
                                <td onclick="openModal({{ $currentDay }})" class="{{ isset($events[$currentDay]) ? 'event' : '' }}">
                                    {{ $currentDay }}
                                    @if(isset($events[$currentDay]))
                                        <div>{{ $events[$currentDay]['event'] }} at {{ $events[$currentDay]['time'] }}</div>
                                    @endif
                                    @php $currentDay++; @endphp
                                </td>
                            @else
                                <td></td>
                            @endif
                        @endfor
                    </tr>
                @endwhile
            </tbody>
        </table>

        <div class="modal" id="modal">
            <div class="modal-content">
                <span onclick="closeModal()" style="cursor:pointer;float:right;">&times;</span>
                <h2>Event Details</h2>
                <input type="hidden" id="day" name="day">
                <input type="text" id="event" name="event" placeholder="Event">
                <input type="time" id="time" name="time">
                <button type="submit">Save</button>
            </div>
        </div>
    </form>

    <div>
        <p><span class="event">Event</span></p>
    </div>
</body>
</html>
