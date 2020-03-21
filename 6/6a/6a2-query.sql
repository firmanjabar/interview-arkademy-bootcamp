SELECT tb_cashier.name, tb_product.name, tb_category.name, tb_product.price
FROM tb_product
INNER JOIN tb_cashier ON tb_product.id_cashier = tb_cashier.id
INNER JOIN tb_category ON tb_product.id_category = tb_category.id;