<?php
class Date
{

    protected int $day;
    protected int $month;
    protected int $year;
    protected int $numberOfDay;

    public function __construct(int $day, int $month, int $year)
    {


        $this->month = $month;
        if ($month < 0 || $month > 12) {
            $month = 1;
            $this->month = $month;
        }

        $this->year = $year;
        if ($year < 2000) {
            $year = 2000;
            $this->year = $year;
        }

        $this->day = $day;
        if ($day < 0 || $day > 31) {
            $day = 1;
            $this->day = $day;
        }
        if ($month % 2 === 0 && $month !== 2 && $day >= 31) {
            $day = 30;
            $this->day = $day;
        }
        if ($month === 2 && $day >= 30) {
            $day = 28;
            $this->day = $day;
        }
        if (
            $month === 2 && $day === 29
            && $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0)
        ) {
            return $this->day = $day;
        }

        return "{$this->day}.{$this->month}.{$this->year}";
    }

    public function diffDay(Date $firstDate, Date $secondDate): int
    {
        $tempNumberOfDay = 0;
        for ($i = 1; $i <= $firstDate->year; $i++) {
            if ($i == $firstDate->year) {
                for ($j = 1; $j < $firstDate->month; $j++) {
                    if ($j === 1 || $j === 3 || $j === 5 || $j === 7 || $j === 8 || $j === 10 || $j === 12) {
                        $tempNumberOfDay = $tempNumberOfDay + 31;
                    }
                    if ($j === 4 || $j === 6 || $j === 9 || $j === 11) {
                        $tempNumberOfDay = $tempNumberOfDay + 30;
                    }
                    if ($j === 2 && $firstDate->year % 4 === 0) {
                        $tempNumberOfDay = $tempNumberOfDay + 29;
                    }
                    if ($j === 2 && $firstDate->year % 4 !== 0) {
                        $tempNumberOfDay = $tempNumberOfDay + 28;
                    }
                }
                $tempNumberOfDay = $tempNumberOfDay + $firstDate->day;
            }


            if ($i % 4 === 0 && $i !== $firstDate->year) {
                $tempNumberOfDay = $tempNumberOfDay + 366;
            }
            if ($i % 4 !== 0 && $i !== $firstDate->year) {
                $tempNumberOfDay = $tempNumberOfDay + 365;
            }
        }
        $firstDate->numberOfDay = $tempNumberOfDay;
        $secondNumberOfDay = 0;
        for ($i = 1; $i <= $secondDate->year; $i++) {
            if ($i === $secondDate->year) {
                for ($j = 1; $j < $secondDate->month; $j++) {
                    if ($j === 1 || $j === 3 || $j === 5 || $j === 7 || $j === 8 || $j === 10 || $j === 12) {
                        $secondNumberOfDay = $secondNumberOfDay + 31;
                    }
                    if ($j === 4 || $j === 6 || $j === 9 || $j === 11) {
                        $secondNumberOfDay = $secondNumberOfDay + 30;
                    }
                    if ($j === 2 && $secondDate->year % 4 === 0) {
                        $secondNumberOfDay = $secondNumberOfDay + 29;
                    }
                    if ($j === 2 && $secondDate->year % 4 !== 0) {
                        $secondNumberOfDay = $secondNumberOfDay + 28;
                    }
                }
                $secondNumberOfDay = $secondNumberOfDay + $secondDate->day;
            }


            if ($i % 4 === 0 && $i !== $secondDate->year) {
                $secondNumberOfDay = $secondNumberOfDay + 366;
            }
            if ($i % 4 !== 0 && $i !== $secondDate->year) {
                $secondNumberOfDay = $secondNumberOfDay + 365;
            }
        }
        $secondDate->numberOfDay = $secondNumberOfDay;
        if ($tempNumberOfDay < $secondNumberOfDay) {
            $temp = $secondNumberOfDay;
            $secondNumberOfDay = $tempNumberOfDay;
            $tempNumberOfDay = $temp;
        }
        $diffDay = $tempNumberOfDay - $secondNumberOfDay;
        return $diffDay;
    }

    public function minusDay(int $minusDay): string
    {
        if ($this->day - $minusDay > 0) {
            $this->day = $this->day - $minusDay;
        } else {
            while ($this->day - $minusDay <= 0) {
                if ($this->month - 1 > 1) {
                    if ($this->month - 1 === 1 ||  $this->month - 1 === 3 || $this->month - 1 === 5 || $this->month - 1 === 7 || $this->month - 1 === 8 || $this->month - 1 === 10 || $this->month - 1 === 12) {
                        $this->day = $this->day + 31;
                        $this->month = $this->month - 1;
                        continue;
                    }
                    if ($this->month - 1 === 4 || $this->month - 1 === 6 || $this->month - 1 === 9 || $this->month - 1 === 11) {
                        $this->day = $this->day + 30;
                        $this->month = $this->month - 1;
                        continue;
                    }
                    if ($this->month - 1 === 2 && $this->year % 4 === 0) {
                        $this->day = $this->day + 29;
                        $this->month = $this->month - 1;
                        continue;
                    }
                    if ($this->month - 1 === 2 && $this->year % 4 !== 0) {
                        $this->day= $this->day + 28;
                        $this->month = $this->month - 1;
                        continue;
                    }
                } else {
                    if ($this->year - 1 > 1) {
                        $this->month = $this->month  + 12;
                        $this->day = $this->day + 31;
                        $this->year = $this->year - 1;
                        continue;
                    } else {
                        return ('Ошибка');
                    }
                }
            }
            $this->day = $this->day - $minusDay;
        }

        return "{$this->day}.{$this->month}.{$this->year}";
    }
    public function __toString()
    {

        return "{$this->day}.{$this->month}.{$this->year}";
    }

    public function getDateOfWeek(): string
    {
        $dateTime = ("$this->year-$this->month-$this->day");
        $time = new DateTime($dateTime);
        $date = (int)$time->format('w');
        if ($date === 0) {
            return "Пн";
        }
        if ($date === 1) {
            return "Вт";
        }
        if ($date === 2) {
            return "Ср";
        }
        if ($date === 3) {
            return "Чт";
        }
        if ($date === 4) {
            return "Пт";
        }
        if ($date === 5) {
            return "Сб";
        }
        if ($date === 6) {
            return "Вс";
        }
    }
    public function formatRu(string $en): string
    {
        if ($en === 'ru') {
            return "{$this->day}.{$this->month}.{$this->year}";
        }
        echo "\n";
        if ($en === 'en') {
            return "{$this->year}-{$this->month}-{$this->day}";
        }
        echo "\n";
    }
}

$date = new Date(1, 13, 2004);
$date1 = new Date(10, 10, 2004);
echo $date->getDateOfWeek();
echo "\n";
echo $date->formatRu('ru');
echo $date->formatRu('en');
echo "\n";
echo $date->diffDay($date, $date1);
echo "\n";
echo $date->minusDay(9);
