<?php

namespace Shopee\Nodes\Item;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstract;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\ResponseData;

class Item extends NodeAbstractV2
{
    /**
     * Use this call to add a product item.
     *
     * @param array|Parameters\Add $parameters
     * @return ResponseData
     */
    public function add($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/add_item', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to add item variations.
     * https://open.shopee.com/documents?module=89&type=1&id=618&version=2
     * @param array|Parameters\AddVariations $parameters
     * @return ResponseData
     */
    public function getModelList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_model_list', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * Use this call to add product item images.
     * @todo migrate v2
     * @param array|Parameters\AddItemImg $parameters
     * @return ResponseData
     */
    public function addItemImg($parameters = []): ResponseData
    {
        return $this->post('/api/v1/item/img/add', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to add item variations.
     *
     * @param array|Parameters\AddVariations $parameters
     * @return ResponseData
     */
    public function addVariations($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/add_model', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to boost multiple items at once.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function boostItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/boost_item', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to delete a product item.
     *
     * @param array|Parameters\Delete $parameters
     * @return ResponseData
     */
    public function delete($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/delete_item', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to delete item variation.
     * https://open.shopee.com/documents?module=89&type=1&id=650&version=2
     * @param array|Parameters\DeleteVariation $parameters
     * @return ResponseData
     */
    public function deleteModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/delete_model', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to delete a product item image.
     * @todo migrate v2
     * @param array|Parameters\DeleteItemImg $parameters
     * @return ResponseData
     */
    public function deleteItemImg($parameters = []): ResponseData
    {
        return $this->post('/api/v1/item/img/delete', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to get attributes of product item.
     *
     * @param array|Parameters\GetAttributes $parameters
     * @return ResponseData
     */
    public function getAttributes($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_attributes', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     *
     * @param array|Parameters\GetAttributes $parameters
     * @return ResponseData
     */
    public function getItemLimit(): ResponseData
    {
        return $this->get('/api/v2/product/get_item_limit', ClientV2::API_TYPE_SHOP);
    }

    /**
     * Use this api to get all boosted items.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getBoostedItems($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_boosted_list', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * Use this call to get categories of product item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getCategories($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_category', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * Use this api to get comment by shopid/itemid/comment_id
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getComment($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_comment', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * Use this call to get detail of item.
     *
     * @param array|Parameters\GetItemDetail $parameters
     * @return ResponseData
     */
    public function getItemBaseInfo($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_item_base_info', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * https://open.shopee.com/documents?module=89&type=1&id=613&version=2
     * @param array|Parameters\GetItemDetail $parameters
     * @return ResponseData
     */
    public function getItemExtraInfo($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_item_extra_info', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to get a list of items.
     *
     * @param array|Parameters\GetItemsList $parameters
     * @return ResponseData
     */
    public function getItemsList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_item_list', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * Use this api to get ongoing and upcoming promotions.
     * https://open.shopee.com/documents?module=89&type=1&id=661&version=2
     * @param array $parameters
     * @return ResponseData
     */
    public function getPromotionInfo($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_item_promotion', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this API to get recommended category ids according to item name.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getRecommendCats($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/category_recommend', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * @param array $parameters
     * @return ResponseData
     */
    public function getDtsLimit($parameters = []): ResponseData
    {
        return $this->get('/api/v2/product/get_dts_limit', ClientV2::API_TYPE_SHOP, [], $parameters);
    }

    /**
     * Use this call to add one item image in assigned position.
     * @todo migrate v2
     * @param array|Parameters\InsertItemImg $parameters
     * @return ResponseData
     */
    public function insertItemImg($parameters = []): ResponseData
    {
        return $this->post('/api/v1/item/img/insert', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this api to reply comments from buyers in batch.
     * https://open.shopee.com/documents?module=89&type=1&id=563&version=2
     * @param array $parameters
     * @return ResponseData
     */
    public function replyComments($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/reply_comment', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to update a product item.
     *
     * @param array|Parameters\UpdateItem $parameters
     * @return ResponseData
     */
    public function updateItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_item', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to update item price.
     *
     * @param array|Parameters\UpdatePrice $parameters
     * @return ResponseData
     */
    public function updatePrice($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_price', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to update item stock.
     *
     * @param array|Parameters\UpdateStock $parameters
     * @return ResponseData
     */
    public function updateStock($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_stock', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to update Sip Item price.
     * https://open.shopee.com/documents?module=89&type=1&id=662&version=2
     * @param array|Parameters\UpdateVariationPrice $parameters
     * @return ResponseData
     */
    public function updateSipItemPrice($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_sip_item_price', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * Use this call to unlist or list items in batch.
     *
     * @param array|Parameters\UpdateVariationStock $parameters
     * @return ResponseData
     */
    public function unlistItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/unlist_item', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * For adding 2-tier variations (Forked).
     *
     * @param array|Parameters\InitTierVariation $parameters
     * @return ResponseData
     */
    public function initTierVariation($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/init_tier_variation', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * For adding 2-tier variations (Forked).
     *
     * @param array|Parameters\UpdateTierVariation $parameters
     * @return ResponseData
     */
    public function updateTierVariation($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_tier_variation', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * For adding 2-tier variations (Forked).
     *
     * @param array|Parameters\UpdateVariationModel $parameters
     * @return ResponseData
     */
    public function updateModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_model', ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * For adding 2-tier variations (Forked).
     *
     * @param array|Parameters\AddVariations $parameters
     * @return ResponseData
     */
    public function addModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/add_model', ClientV2::API_TYPE_SHOP, $parameters);
    }
    /**
     * For adding 2-tier variations (Forked).
     *
     * @param array|Parameters\RemoveVariation $parameters
     * @return ResponseData
     */
    public function removeModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/delete_model', ClientV2::API_TYPE_SHOP, $parameters);
    }
}
