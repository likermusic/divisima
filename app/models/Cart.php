<?php 
    namespace app\models;
    use app\core\Model;

    class Cart extends Model {
        public function getProducts($user_id)
        {
            $stmt = $this->db->prepare(" SELECT *
            FROM products JOIN carts ON carts.product_id = products.id
            WHERE carts.user_id = {$user_id}");
            
           

// $stmt = $this->db->prepare(" SELECT *, COUNT(products.id) AS qty
// FROM products JOIN carts ON carts.product_id = products.id
// WHERE carts.user_id = {$user_id} GROUP BY products.id");
            $stmt->execute();
            $arr['products'] = $stmt->fetchAll(\PDO::FETCH_OBJ);

            $stmt = $this->db->prepare("SELECT product_id,COUNT(product_id) AS qty FROM carts WHERE user_id = {$user_id} GROUP BY product_id HAVING product_id>1");
            $stmt->execute();
            $arr['qtys'] = $stmt->fetchAll(\PDO::FETCH_OBJ);
            return $arr;
        }

        public function changeProductCount($product_id)
        {
            return $this->fetchOne($product_id, 'products');
        }
    }

?>
