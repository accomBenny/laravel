<?php

namespace App\Http\Controllers;
use App\Http\Requests\AllRequest1;
use App\Http\Requests\Comment\UpdateComment;
use App\Http\Requests\Comment\CreateComment;
use App\Http\Requests\Comment\DeleteComment;
use App\Http\Requests\Comment\SearchComment;
use Illuminate\Support\Facades\Validator;

use App\Models\Comment;
use Symfony\Component\HttpFoundation\Response;
class CommentController extends Controller
{
    public function getAll()
    {
        $comments = Comment::all();
        $httpStatus = Response::HTTP_OK;
        $return = [
            'statusCode' => $httpStatus,
            'message' => '獲取所有留言成功',
            'allComments' => $comments
        ];
        return response()->json($return,$httpStatus);
    }
    public function search(SearchComment $request) {
        $id = $request->id;
        $comment = Comment::find($id);

        if (!$comment){
            $return = [
                'message' => '搜尋留言失敗',
                'error' => [
                    "comment" => [
                        '查無此id，您查詢的id為'.$id
                    ]
                ],
                'status' => Response::HTTP_NOT_FOUND
            ];

            return response()->json($return, Response::HTTP_NOT_FOUND, );
        }
        $return = [
            'statusCode'=> Response::HTTP_OK,
            'message' => '搜尋留言成功',
            'contents' => $comment
        ];
        return response()->json($return, Response::HTTP_OK);
        
    }
    public function create(CreateComment $request)
    {
        $data = $request->all();
        $comment = Comment::create($data);
        $return = [
            'statusCode' => Response::HTTP_OK,
            'message' => '創建留言成功',
            'contents' => $comment
        ];

        return response()->json($return, Response::HTTP_OK,);
    }
    public function update(UpdateComment $request){
        $id = $request->id;
        $comment = Comment::find($id);

        if (!$comment){
            $return = [
                'message' => '更改留言失敗',
                'error' => [
                    "comment" => [
                        '查無此id，您查詢的id為'.$id
                    ]
                ],
                'status' => Response::HTTP_NOT_FOUND
            ];

            return response()->json($return, Response::HTTP_NOT_FOUND, );
        }
        $data = $request->all();
        $comment->update($data);;
        $return = [
            'message' => '更改留言成功',
            'status' => Response::HTTP_OK,
            'content' => $comment,
        ];

        return response()->json($return, Response::HTTP_OK);
    }
    public function delete(DeleteComment $request){
        $id = $request->id;
        $comment = Comment::find($id);

        if (!$comment){
            $return = [
                'message' => '刪除留言失敗',
                'error' => [
                    "comment" => [
                        '查無此id，您查詢的id為'.$id
                    ]
                ],
                'status' => Response::HTTP_NOT_FOUND
            ];

            return response()->json($return, Response::HTTP_NOT_FOUND, );
        }
        $comment->delete();
        $return = [
            'statusCode' => Response::HTTP_OK,
            'message' => '刪除成功',
            'commentData' => $comment,
        ];

        return response()->json(
            $return ,
            Response::HTTP_OK
        );
    }
    // public function delete($id){
    //     $comment = Comment::find($id);

    //     if (!$comment){
    //         $return = [
    //             'message' => '刪除留言失敗',
    //             'error' => [
    //                 "comment" => [
    //                     '查無此id，您查詢的id為'.$id
    //                 ]
    //             ],
    //             'status' => Response::HTTP_NOT_FOUND
    //         ];

    //         return response()->json($return, Response::HTTP_NOT_FOUND, );
    //     }
    //     $comment->delete();
    //     $return = [
    //         'statusCode' => Response::HTTP_OK,
    //         'message' => '刪除成功',
    //         'commentData' => $comment,
    //     ];

    //     return response()->json(
    //         $return ,
    //         Response::HTTP_OK
    //     );
    // }
}