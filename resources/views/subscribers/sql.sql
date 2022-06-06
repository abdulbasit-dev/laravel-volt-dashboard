SELECT *
FROM
    staff
    INNER JOIN ticket ON staff.id = ticket.staff_id;
    where ticket.date_open = "2022" 