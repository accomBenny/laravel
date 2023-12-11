<?php

namespace App\Docs;

/**
 *  @OA\Info(
 *      version="1.0.0",
 *      title="Board API Demo",
 *      description="留言板API 文件",
 *      @OA\Contact(
 *          name="行雲者",
 *          url="https://www.cmrdb.cs.pu.edu.tw",
 *          email="developer@example.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      ),
 *  ),
 *  // 當有底下有 API Get,Post,... 就可以刪掉
 *  // 是為了展示 Info 用途而已，不然會出 Error
 *  @OA\PathItem(
 *      path="/"
 *  ),
 *  *  @OA\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      type="http",
 *      scheme="bearer",
 *      description="API accessToken"
 *  ),
 *  @OA\SecurityScheme(
 *      securityScheme="Authorization",
 *      type="apiKey",
 *      in="header",
 *      name="Authorization_name"
 *  ),
 *  @OA\SecurityScheme(
 *      securityScheme="Cookie",
 *      type="apiKey",
 *      in="cookie",
 *      description="Cookie description",
 *      name="Cookie_name"
 *  ),
 *  @OA\SecurityScheme(
 *      securityScheme="Query",
 *      type="apiKey",
 *      in="query",
 *      description="Query description",
 *      name="Query_name"
 *  )
 */
class Info
{
}