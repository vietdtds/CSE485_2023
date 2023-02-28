

#a
SELECT * from baiviet,theloai  WHERE baiviet.ma_tloai = theloai.ma_tloai and theloai.ten_tloai = "Nhạc trữ tình";
#b
SELECT * FROM baiviet,tacgia WHERE baiviet.ma_tgia = tacgia.ma_tgia and tacgia.ten_tgia = "Nhacvietplus";
#c
SELECT theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_tloai IS NULL;
#d
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet FROM baiviet,tacgia,theloai 
where baiviet.ma_tgia = tacgia.ma_tgia and baiviet.ma_tloai = theloai.ma_tloai;
#e
SELECT theloai.ten_tloai, COUNT(*) AS soLuong
FROM baiviet,theloai where baiviet.ma_tloai = theloai.ma_tloai
GROUP BY theloai.ten_tloai
ORDER BY soLuong DESC
LIMIT 1;

SELECT theloai.ten_tloai, COUNT(*) AS so_bai_viet
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY baiviet.ma_tloai
HAVING COUNT(*) = (SELECT COUNT(*) AS so_bai_viet
                   FROM baiviet
                   GROUP BY ma_tloai
                   ORDER BY so_bai_viet DESC
                   LIMIT 1);
#f
SELECT tacgia.ten_tgia, COUNT(*) AS soLuong
FROM baiviet,tacgia where baiviet.ma_tgia = tacgia.ma_tgia
GROUP BY tacgia.ma_tgia
ORDER BY soLuong DESC
LIMIT 2;

#g
SELECT * FROM baiviet
WHERE ten_bhat LIKE "%yêu%" or ten_bhat LIKE "%thương%" or ten_bhat LIKE "%anh%" or ten_bhat LIKE "%em%";

#h
SELECT * FROM baiviet
WHERE tieude LIKE "%yêu%" or tieude LIKE "%thương%" or tieude LIKE "%anh%" or tieude LIKE "%em%" 
or ten_bhat LIKE "%yêu%" or ten_bhat LIKE "%thương%" or ten_bhat LIKE "%anh%" or ten_bhat LIKE "%em%";

SELECT *
FROM baiviet
WHERE ten_bhat REGEXP 'yêu|thương|anh|em'
   OR tieude REGEXP 'yêu|thương|anh|em';

#i
CREATE VIEW vw_Music AS 
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,baiviet.tomtat,baiviet.noidung,baiviet.ngayviet,baiviet.hinhanh,theloai.ten_tloai,tacgia.ten_tgia
FROM baiviet 
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;

