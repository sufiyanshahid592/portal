@include('header')
   <meta name="viewport" content="width=device-width, initial-scale=1" />
 <style>
[badge]:after {
      background: red;
    border-radius: 30px;
    color: #fff;
    content: attr(badge);
    font-size: 11px;
    margin-top: -10px;
    min-width: 20px;
    padding: 2px;
    position: absolute;
    text-align: center;
}</style>
<style>
            .view-email-doc .web_bg {
                background-color: #002b3e;
            }
            .view-email-doc .price_title {
                font-weight: 600;
                color: black;
                font-size: 25px;
            }
            .view-email-doc .table-2 thead tr th {
                border-bottom: 0px;
                font-weight: 500;
                border-top: 1px solid  #3092c0 !important;
                text-align: center;
                padding: 2px;
                font-size: 13px;
                color: white;
            }
            .view-email-doc .table-2 tbody tr td {
                text-align: center;
                padding: 2px;
                font-size: 13px;
            }
            .view-email-doc .table-1 tbody tr td,
            .view-email-doc .table-2 tbody tr td,
            .view-email-doc .table-2 thead tr th {
                border: 1px solid  #3092c0 !important;
                padding: 2px;
                font-size: 13px;
            }
            .view-email-doc .unique-footer h6 {
               font-size: 16px;
            }
            .view-email-doc .unique-footer p {
               font-size: 12px;
               font-weight: 500;
            }

            .view-email-doc .max-footer-wid  p{
                font-size: 13px;
               font-weight: 700;
            }

            .view-email-doc .footer-p a{
                color: #000;
            }
            .view-email-doc .footer-p i{
                font-size: 18px;
            }
            .view-email-doc .footer-p a{
                font-size: 13px;
                font-weight: 600;
            }

            .view-email-doc .footer-pay{
                font-size: 18px;
                font-weight: 600;
                color: #3092c0;
            }
            .view-email-doc div.uniqpad{
                padding-left: 3px;
            }
            .view-email-doc input{
                width: 100%;
            }



  .input-bg {
      background: #d6e3cf;
      border: none;
  }
  .bg-color-td-2 {
    background-color: #d6e3cf !important;
    color: black !important;
    border: 3px solid white !important;
}
  .bg-color-td {
    background-color: #70ac48 !important;
    color: white !important;
    border: 2px solid #dee2e6;
}
  .info.pro-tr-info {
    /* width: 20%; */
    background: #70ac48;
    padding: 10px 0px;
    /* border-right: 5px solid rgba(30, 30, 30, 0.8); */
}
         .print-join-btn {
    border: 1px solid #ffff;
    background: rgba(20, 20, 20, 0.6);
    font-size: 18px;
    color: white;
    margin: 0px 20px 0px 0px;
    padding: 10px 50px;
    cursor: pointer;
    transition: 0.4s;
}       
       
                    /*-------------  Common CSS------------------*/

                    .m-0 {
                        margin: 0 !important;
                    }
                    .mt-0,
                    .my-0 {
                        margin-top: 0 !important;
                    }
                    .mr-0,
                    .mx-0 {
                        margin-right: 0 !important;
                    }
                    .mb-0,
                    .my-0 {
                        margin-bottom: 0 !important;
                    }
                    .ml-0,
                    .mx-0 {
                        margin-left: 0 !important;
                    }
                    .m-1 {
                        margin: 0.25rem !important;
                    }
                    .mt-1,
                    .my-1 {
                        margin-top: 0.25rem !important;
                    }
                    .mr-1,
                    .mx-1 {
                        margin-right: 0.25rem !important;
                    }
                    .mb-1,
                    .my-1 {
                        margin-bottom: 0.25rem !important;
                    }
                    .ml-1,
                    .mx-1 {
                        margin-left: 0.25rem !important;
                    }
                    .m-2 {
                        margin: 0.5rem !important;
                    }
                    .mt-2,
                    .my-2 {
                        margin-top: 0.5rem !important;
                    }
                    .mr-2,
                    .mx-2 {
                        margin-right: 0.5rem !important;
                    }
                    .mb-2,
                    .my-2 {
                        margin-bottom: 0.5rem !important;
                    }
                    .ml-2,
                    .mx-2 {
                        margin-left: 0.5rem !important;
                    }
                    .m-3 {
                        margin: 1rem !important;
                    }
                    .mt-3,
                    .my-3 {
                        margin-top: 1rem !important;
                    }
                    .mr-3,
                    .mx-3 {
                        margin-right: 1rem !important;
                    }
                    .mb-3,
                    .my-3 {
                        margin-bottom: 1rem !important;
                    }
                    .ml-3,
                    .mx-3 {
                        margin-left: 1rem !important;
                    }
                    .m-4 {
                        margin: 1.5rem !important;
                    }
                    .mt-4,
                    .my-4 {
                        margin-top: 1.5rem !important;
                    }
                    .mr-4,
                    .mx-4 {
                        margin-right: 1.5rem !important;
                    }
                    .mb-4,
                    .my-4 {
                        margin-bottom: 1.5rem !important;
                    }
                    .ml-4,
                    .mx-4 {
                        margin-left: 1.5rem !important;
                    }
                    .m-5 {
                        margin: 3rem !important;
                    }
                    .mt-5,
                    .my-5 {
                        margin-top: 3rem !important;
                    }
                    .mr-5,
                    .mx-5 {
                        margin-right: 3rem !important;
                    }
                    .mb-5,
                    .my-5 {
                        margin-bottom: 3rem !important;
                    }
                    .ml-5,
                    .mx-5 {
                        margin-left: 3rem !important;
                    }
                    .p-0 {
                        padding: 0 !important;
                    }
                    .pt-0,
                    .py-0 {
                        padding-top: 0 !important;
                    }
                    .pr-0,
                    .px-0 {
                        padding-right: 0 !important;
                    }
                    .pb-0,
                    .py-0 {
                        padding-bottom: 0 !important;
                    }
                    .pl-0,
                    .px-0 {
                        padding-left: 0 !important;
                    }
                    .p-1 {
                        padding: 0.25rem !important;
                    }
                    .pt-1,
                    .py-1 {
                        padding-top: 0.25rem !important;
                    }
                    .pr-1,
                    .px-1 {
                        padding-right: 0.25rem !important;
                    }
                    .pb-1,
                    .py-1 {
                        padding-bottom: 0.25rem !important;
                    }
                    .pl-1,
                    .px-1 {
                        padding-left: 0.25rem !important;
                    }
                    .p-2 {
                        padding: 0.5rem !important;
                    }
                    .pt-2,
                    .py-2 {
                        padding-top: 0.5rem !important;
                    }
                    .pr-2,
                    .px-2 {
                        padding-right: 0.5rem !important;
                    }
                    .pb-2,
                    .py-2 {
                        padding-bottom: 0.5rem !important;
                    }
                    .pl-2,
                    .px-2 {
                        padding-left: 0.5rem !important;
                    }
                    .p-3 {
                        padding: 1rem !important;
                    }
                    .pt-3,
                    .py-3 {
                        padding-top: 1rem !important;
                    }
                    .pr-3,
                    .px-3 {
                        padding-right: 1rem !important;
                    }
                    .pb-3,
                    .py-3 {
                        padding-bottom: 1rem !important;
                    }
                    .pl-3,
                    .px-3 {
                        padding-left: 1rem !important;
                    }
                    .p-4 {
                        padding: 1.5rem !important;
                    }
                    .pt-4,
                    .py-4 {
                        padding-top: 1.5rem !important;
                    }
                    .pr-4,
                    .px-4 {
                        padding-right: 1.5rem !important;
                    }
                    .pb-4,
                    .py-4 {
                        padding-bottom: 1.5rem !important;
                    }
                    .pl-4,
                    .px-4 {
                        padding-left: 1.5rem !important;
                    }
                    .p-5 {
                        padding: 3rem !important;
                    }
                    .pt-5,
                    .py-5 {
                        padding-top: 3rem !important;
                    }
                    .pr-5,
                    .px-5 {
                        padding-right: 3rem !important;
                    }
                    .pb-5,
                    .py-5 {
                        padding-bottom: 3rem !important;
                    }
                    .pl-5,
                    .px-5 {
                        padding-left: 3rem !important;
                    }
                    .m-auto {
                        margin: auto !important;
                    }
                    .mt-auto,
                    .my-auto {
                        margin-top: auto !important;
                    }
                    .mr-auto,
                    .mx-auto {
                        margin-right: auto !important;
                    }
                    .mb-auto,
                    .my-auto {
                        margin-bottom: auto !important;
                    }
                    .ml-auto,
                    .mx-auto {
                        margin-left: auto !important;
                    }
                    @media (min-width: 576px) {
                        .m-sm-0 {
                            margin: 0 !important;
                        }
                        .mt-sm-0,
                        .my-sm-0 {
                            margin-top: 0 !important;
                        }
                        .mr-sm-0,
                        .mx-sm-0 {
                            margin-right: 0 !important;
                        }
                        .mb-sm-0,
                        .my-sm-0 {
                            margin-bottom: 0 !important;
                        }
                        .ml-sm-0,
                        .mx-sm-0 {
                            margin-left: 0 !important;
                        }
                        .m-sm-1 {
                            margin: 0.25rem !important;
                        }
                        .mt-sm-1,
                        .my-sm-1 {
                            margin-top: 0.25rem !important;
                        }
                        .mr-sm-1,
                        .mx-sm-1 {
                            margin-right: 0.25rem !important;
                        }
                        .mb-sm-1,
                        .my-sm-1 {
                            margin-bottom: 0.25rem !important;
                        }
                        .ml-sm-1,
                        .mx-sm-1 {
                            margin-left: 0.25rem !important;
                        }
                        .m-sm-2 {
                            margin: 0.5rem !important;
                        }
                        .mt-sm-2,
                        .my-sm-2 {
                            margin-top: 0.5rem !important;
                        }
                        .mr-sm-2,
                        .mx-sm-2 {
                            margin-right: 0.5rem !important;
                        }
                        .mb-sm-2,
                        .my-sm-2 {
                            margin-bottom: 0.5rem !important;
                        }
                        .ml-sm-2,
                        .mx-sm-2 {
                            margin-left: 0.5rem !important;
                        }
                        .m-sm-3 {
                            margin: 1rem !important;
                        }
                        .mt-sm-3,
                        .my-sm-3 {
                            margin-top: 1rem !important;
                        }
                        .mr-sm-3,
                        .mx-sm-3 {
                            margin-right: 1rem !important;
                        }
                        .mb-sm-3,
                        .my-sm-3 {
                            margin-bottom: 1rem !important;
                        }
                        .ml-sm-3,
                        .mx-sm-3 {
                            margin-left: 1rem !important;
                        }
                        .m-sm-4 {
                            margin: 1.5rem !important;
                        }
                        .mt-sm-4,
                        .my-sm-4 {
                            margin-top: 1.5rem !important;
                        }
                        .mr-sm-4,
                        .mx-sm-4 {
                            margin-right: 1.5rem !important;
                        }
                        .mb-sm-4,
                        .my-sm-4 {
                            margin-bottom: 1.5rem !important;
                        }
                        .ml-sm-4,
                        .mx-sm-4 {
                            margin-left: 1.5rem !important;
                        }
                        .m-sm-5 {
                            margin: 3rem !important;
                        }
                        .mt-sm-5,
                        .my-sm-5 {
                            margin-top: 3rem !important;
                        }
                        .mr-sm-5,
                        .mx-sm-5 {
                            margin-right: 3rem !important;
                        }
                        .mb-sm-5,
                        .my-sm-5 {
                            margin-bottom: 3rem !important;
                        }
                        .ml-sm-5,
                        .mx-sm-5 {
                            margin-left: 3rem !important;
                        }
                        .p-sm-0 {
                            padding: 0 !important;
                        }
                        .pt-sm-0,
                        .py-sm-0 {
                            padding-top: 0 !important;
                        }
                        .pr-sm-0,
                        .px-sm-0 {
                            padding-right: 0 !important;
                        }
                        .pb-sm-0,
                        .py-sm-0 {
                            padding-bottom: 0 !important;
                        }
                        .pl-sm-0,
                        .px-sm-0 {
                            padding-left: 0 !important;
                        }
                        .p-sm-1 {
                            padding: 0.25rem !important;
                        }
                        .pt-sm-1,
                        .py-sm-1 {
                            padding-top: 0.25rem !important;
                        }
                        .pr-sm-1,
                        .px-sm-1 {
                            padding-right: 0.25rem !important;
                        }
                        .pb-sm-1,
                        .py-sm-1 {
                            padding-bottom: 0.25rem !important;
                        }
                        .pl-sm-1,
                        .px-sm-1 {
                            padding-left: 0.25rem !important;
                        }
                        .p-sm-2 {
                            padding: 0.5rem !important;
                        }
                        .pt-sm-2,
                        .py-sm-2 {
                            padding-top: 0.5rem !important;
                        }
                        .pr-sm-2,
                        .px-sm-2 {
                            padding-right: 0.5rem !important;
                        }
                        .pb-sm-2,
                        .py-sm-2 {
                            padding-bottom: 0.5rem !important;
                        }
                        .pl-sm-2,
                        .px-sm-2 {
                            padding-left: 0.5rem !important;
                        }
                        .p-sm-3 {
                            padding: 1rem !important;
                        }
                        .pt-sm-3,
                        .py-sm-3 {
                            padding-top: 1rem !important;
                        }
                        .pr-sm-3,
                        .px-sm-3 {
                            padding-right: 1rem !important;
                        }
                        .pb-sm-3,
                        .py-sm-3 {
                            padding-bottom: 1rem !important;
                        }
                        .pl-sm-3,
                        .px-sm-3 {
                            padding-left: 1rem !important;
                        }
                        .p-sm-4 {
                            padding: 1.5rem !important;
                        }
                        .pt-sm-4,
                        .py-sm-4 {
                            padding-top: 1.5rem !important;
                        }
                        .pr-sm-4,
                        .px-sm-4 {
                            padding-right: 1.5rem !important;
                        }
                        .pb-sm-4,
                        .py-sm-4 {
                            padding-bottom: 1.5rem !important;
                        }
                        .pl-sm-4,
                        .px-sm-4 {
                            padding-left: 1.5rem !important;
                        }
                        .p-sm-5 {
                            padding: 3rem !important;
                        }
                        .pt-sm-5,
                        .py-sm-5 {
                            padding-top: 3rem !important;
                        }
                        .pr-sm-5,
                        .px-sm-5 {
                            padding-right: 3rem !important;
                        }
                        .pb-sm-5,
                        .py-sm-5 {
                            padding-bottom: 3rem !important;
                        }
                        .pl-sm-5,
                        .px-sm-5 {
                            padding-left: 3rem !important;
                        }
                        .m-sm-auto {
                            margin: auto !important;
                        }
                        .mt-sm-auto,
                        .my-sm-auto {
                            margin-top: auto !important;
                        }
                        .mr-sm-auto,
                        .mx-sm-auto {
                            margin-right: auto !important;
                        }
                        .mb-sm-auto,
                        .my-sm-auto {
                            margin-bottom: auto !important;
                        }
                        .ml-sm-auto,
                        .mx-sm-auto {
                            margin-left: auto !important;
                        }
                    }
                    @media (min-width: 768px) {
                        .m-md-0 {
                            margin: 0 !important;
                        }
                        .mt-md-0,
                        .my-md-0 {
                            margin-top: 0 !important;
                        }
                        .mr-md-0,
                        .mx-md-0 {
                            margin-right: 0 !important;
                        }
                        .mb-md-0,
                        .my-md-0 {
                            margin-bottom: 0 !important;
                        }
                        .ml-md-0,
                        .mx-md-0 {
                            margin-left: 0 !important;
                        }
                        .m-md-1 {
                            margin: 0.25rem !important;
                        }
                        .mt-md-1,
                        .my-md-1 {
                            margin-top: 0.25rem !important;
                        }
                        .mr-md-1,
                        .mx-md-1 {
                            margin-right: 0.25rem !important;
                        }
                        .mb-md-1,
                        .my-md-1 {
                            margin-bottom: 0.25rem !important;
                        }
                        .ml-md-1,
                        .mx-md-1 {
                            margin-left: 0.25rem !important;
                        }
                        .m-md-2 {
                            margin: 0.5rem !important;
                        }
                        .mt-md-2,
                        .my-md-2 {
                            margin-top: 0.5rem !important;
                        }
                        .mr-md-2,
                        .mx-md-2 {
                            margin-right: 0.5rem !important;
                        }
                        .mb-md-2,
                        .my-md-2 {
                            margin-bottom: 0.5rem !important;
                        }
                        .ml-md-2,
                        .mx-md-2 {
                            margin-left: 0.5rem !important;
                        }
                        .m-md-3 {
                            margin: 1rem !important;
                        }
                        .mt-md-3,
                        .my-md-3 {
                            margin-top: 1rem !important;
                        }
                        .mr-md-3,
                        .mx-md-3 {
                            margin-right: 1rem !important;
                        }
                        .mb-md-3,
                        .my-md-3 {
                            margin-bottom: 1rem !important;
                        }
                        .ml-md-3,
                        .mx-md-3 {
                            margin-left: 1rem !important;
                        }
                        .m-md-4 {
                            margin: 1.5rem !important;
                        }
                        .mt-md-4,
                        .my-md-4 {
                            margin-top: 1.5rem !important;
                        }
                        .mr-md-4,
                        .mx-md-4 {
                            margin-right: 1.5rem !important;
                        }
                        .mb-md-4,
                        .my-md-4 {
                            margin-bottom: 1.5rem !important;
                        }
                        .ml-md-4,
                        .mx-md-4 {
                            margin-left: 1.5rem !important;
                        }
                        .m-md-5 {
                            margin: 3rem !important;
                        }
                        .mt-md-5,
                        .my-md-5 {
                            margin-top: 3rem !important;
                        }
                        .mr-md-5,
                        .mx-md-5 {
                            margin-right: 3rem !important;
                        }
                        .mb-md-5,
                        .my-md-5 {
                            margin-bottom: 3rem !important;
                        }
                        .ml-md-5,
                        .mx-md-5 {
                            margin-left: 3rem !important;
                        }
                        .p-md-0 {
                            padding: 0 !important;
                        }
                        .pt-md-0,
                        .py-md-0 {
                            padding-top: 0 !important;
                        }
                        .pr-md-0,
                        .px-md-0 {
                            padding-right: 0 !important;
                        }
                        .pb-md-0,
                        .py-md-0 {
                            padding-bottom: 0 !important;
                        }
                        .pl-md-0,
                        .px-md-0 {
                            padding-left: 0 !important;
                        }
                        .p-md-1 {
                            padding: 0.25rem !important;
                        }
                        .pt-md-1,
                        .py-md-1 {
                            padding-top: 0.25rem !important;
                        }
                        .pr-md-1,
                        .px-md-1 {
                            padding-right: 0.25rem !important;
                        }
                        .pb-md-1,
                        .py-md-1 {
                            padding-bottom: 0.25rem !important;
                        }
                        .pl-md-1,
                        .px-md-1 {
                            padding-left: 0.25rem !important;
                        }
                        .p-md-2 {
                            padding: 0.5rem !important;
                        }
                        .pt-md-2,
                        .py-md-2 {
                            padding-top: 0.5rem !important;
                        }
                        .pr-md-2,
                        .px-md-2 {
                            padding-right: 0.5rem !important;
                        }
                        .pb-md-2,
                        .py-md-2 {
                            padding-bottom: 0.5rem !important;
                        }
                        .pl-md-2,
                        .px-md-2 {
                            padding-left: 0.5rem !important;
                        }
                        .p-md-3 {
                            padding: 1rem !important;
                        }
                        .pt-md-3,
                        .py-md-3 {
                            padding-top: 1rem !important;
                        }
                        .pr-md-3,
                        .px-md-3 {
                            padding-right: 1rem !important;
                        }
                        .pb-md-3,
                        .py-md-3 {
                            padding-bottom: 1rem !important;
                        }
                        .pl-md-3,
                        .px-md-3 {
                            padding-left: 1rem !important;
                        }
                        .p-md-4 {
                            padding: 1.5rem !important;
                        }
                        .pt-md-4,
                        .py-md-4 {
                            padding-top: 1.5rem !important;
                        }
                        .pr-md-4,
                        .px-md-4 {
                            padding-right: 1.5rem !important;
                        }
                        .pb-md-4,
                        .py-md-4 {
                            padding-bottom: 1.5rem !important;
                        }
                        .pl-md-4,
                        .px-md-4 {
                            padding-left: 1.5rem !important;
                        }
                        .p-md-5 {
                            padding: 3rem !important;
                        }
                        .pt-md-5,
                        .py-md-5 {
                            padding-top: 3rem !important;
                        }
                        .pr-md-5,
                        .px-md-5 {
                            padding-right: 3rem !important;
                        }
                        .pb-md-5,
                        .py-md-5 {
                            padding-bottom: 3rem !important;
                        }
                        .pl-md-5,
                        .px-md-5 {
                            padding-left: 3rem !important;
                        }
                        .m-md-auto {
                            margin: auto !important;
                        }
                        .mt-md-auto,
                        .my-md-auto {
                            margin-top: auto !important;
                        }
                        .mr-md-auto,
                        .mx-md-auto {
                            margin-right: auto !important;
                        }
                        .mb-md-auto,
                        .my-md-auto {
                            margin-bottom: auto !important;
                        }
                        .ml-md-auto,
                        .mx-md-auto {
                            margin-left: auto !important;
                        }
                    }
                    @media (min-width: 992px) {
                        .m-lg-0 {
                            margin: 0 !important;
                        }
                        .mt-lg-0,
                        .my-lg-0 {
                            margin-top: 0 !important;
                        }
                        .mr-lg-0,
                        .mx-lg-0 {
                            margin-right: 0 !important;
                        }
                        .mb-lg-0,
                        .my-lg-0 {
                            margin-bottom: 0 !important;
                        }
                        .ml-lg-0,
                        .mx-lg-0 {
                            margin-left: 0 !important;
                        }
                        .m-lg-1 {
                            margin: 0.25rem !important;
                        }
                        .mt-lg-1,
                        .my-lg-1 {
                            margin-top: 0.25rem !important;
                        }
                        .mr-lg-1,
                        .mx-lg-1 {
                            margin-right: 0.25rem !important;
                        }
                        .mb-lg-1,
                        .my-lg-1 {
                            margin-bottom: 0.25rem !important;
                        }
                        .ml-lg-1,
                        .mx-lg-1 {
                            margin-left: 0.25rem !important;
                        }
                        .m-lg-2 {
                            margin: 0.5rem !important;
                        }
                        .mt-lg-2,
                        .my-lg-2 {
                            margin-top: 0.5rem !important;
                        }
                        .mr-lg-2,
                        .mx-lg-2 {
                            margin-right: 0.5rem !important;
                        }
                        .mb-lg-2,
                        .my-lg-2 {
                            margin-bottom: 0.5rem !important;
                        }
                        .ml-lg-2,
                        .mx-lg-2 {
                            margin-left: 0.5rem !important;
                        }
                        .m-lg-3 {
                            margin: 1rem !important;
                        }
                        .mt-lg-3,
                        .my-lg-3 {
                            margin-top: 1rem !important;
                        }
                        .mr-lg-3,
                        .mx-lg-3 {
                            margin-right: 1rem !important;
                        }
                        .mb-lg-3,
                        .my-lg-3 {
                            margin-bottom: 1rem !important;
                        }
                        .ml-lg-3,
                        .mx-lg-3 {
                            margin-left: 1rem !important;
                        }
                        .m-lg-4 {
                            margin: 1.5rem !important;
                        }
                        .mt-lg-4,
                        .my-lg-4 {
                            margin-top: 1.5rem !important;
                        }
                        .mr-lg-4,
                        .mx-lg-4 {
                            margin-right: 1.5rem !important;
                        }
                        .mb-lg-4,
                        .my-lg-4 {
                            margin-bottom: 1.5rem !important;
                        }
                        .ml-lg-4,
                        .mx-lg-4 {
                            margin-left: 1.5rem !important;
                        }
                        .m-lg-5 {
                            margin: 3rem !important;
                        }
                        .mt-lg-5,
                        .my-lg-5 {
                            margin-top: 3rem !important;
                        }
                        .mr-lg-5,
                        .mx-lg-5 {
                            margin-right: 3rem !important;
                        }
                        .mb-lg-5,
                        .my-lg-5 {
                            margin-bottom: 3rem !important;
                        }
                        .ml-lg-5,
                        .mx-lg-5 {
                            margin-left: 3rem !important;
                        }
                        .p-lg-0 {
                            padding: 0 !important;
                        }
                        .pt-lg-0,
                        .py-lg-0 {
                            padding-top: 0 !important;
                        }
                        .pr-lg-0,
                        .px-lg-0 {
                            padding-right: 0 !important;
                        }
                        .pb-lg-0,
                        .py-lg-0 {
                            padding-bottom: 0 !important;
                        }
                        .pl-lg-0,
                        .px-lg-0 {
                            padding-left: 0 !important;
                        }
                        .p-lg-1 {
                            padding: 0.25rem !important;
                        }
                        .pt-lg-1,
                        .py-lg-1 {
                            padding-top: 0.25rem !important;
                        }
                        .pr-lg-1,
                        .px-lg-1 {
                            padding-right: 0.25rem !important;
                        }
                        .pb-lg-1,
                        .py-lg-1 {
                            padding-bottom: 0.25rem !important;
                        }
                        .pl-lg-1,
                        .px-lg-1 {
                            padding-left: 0.25rem !important;
                        }
                        .p-lg-2 {
                            padding: 0.5rem !important;
                        }
                        .pt-lg-2,
                        .py-lg-2 {
                            padding-top: 0.5rem !important;
                        }
                        .pr-lg-2,
                        .px-lg-2 {
                            padding-right: 0.5rem !important;
                        }
                        .pb-lg-2,
                        .py-lg-2 {
                            padding-bottom: 0.5rem !important;
                        }
                        .pl-lg-2,
                        .px-lg-2 {
                            padding-left: 0.5rem !important;
                        }
                        .p-lg-3 {
                            padding: 1rem !important;
                        }
                        .pt-lg-3,
                        .py-lg-3 {
                            padding-top: 1rem !important;
                        }
                        .pr-lg-3,
                        .px-lg-3 {
                            padding-right: 1rem !important;
                        }
                        .pb-lg-3,
                        .py-lg-3 {
                            padding-bottom: 1rem !important;
                        }
                        .pl-lg-3,
                        .px-lg-3 {
                            padding-left: 1rem !important;
                        }
                        .p-lg-4 {
                            padding: 1.5rem !important;
                        }
                        .pt-lg-4,
                        .py-lg-4 {
                            padding-top: 1.5rem !important;
                        }
                        .pr-lg-4,
                        .px-lg-4 {
                            padding-right: 1.5rem !important;
                        }
                        .pb-lg-4,
                        .py-lg-4 {
                            padding-bottom: 1.5rem !important;
                        }
                        .pl-lg-4,
                        .px-lg-4 {
                            padding-left: 1.5rem !important;
                        }
                        .p-lg-5 {
                            padding: 3rem !important;
                        }
                        .pt-lg-5,
                        .py-lg-5 {
                            padding-top: 3rem !important;
                        }
                        .pr-lg-5,
                        .px-lg-5 {
                            padding-right: 3rem !important;
                        }
                        .pb-lg-5,
                        .py-lg-5 {
                            padding-bottom: 3rem !important;
                        }
                        .pl-lg-5,
                        .px-lg-5 {
                            padding-left: 3rem !important;
                        }
                        .m-lg-auto {
                            margin: auto !important;
                        }
                        .mt-lg-auto,
                        .my-lg-auto {
                            margin-top: auto !important;
                        }
                        .mr-lg-auto,
                        .mx-lg-auto {
                            margin-right: auto !important;
                        }
                        .mb-lg-auto,
                        .my-lg-auto {
                            margin-bottom: auto !important;
                        }
                        .ml-lg-auto,
                        .mx-lg-auto {
                            margin-left: auto !important;
                        }
                    }
                    @media (min-width: 1200px) {
                        .m-xl-0 {
                            margin: 0 !important;
                        }
                        .mt-xl-0,
                        .my-xl-0 {
                            margin-top: 0 !important;
                        }
                        .mr-xl-0,
                        .mx-xl-0 {
                            margin-right: 0 !important;
                        }
                        .mb-xl-0,
                        .my-xl-0 {
                            margin-bottom: 0 !important;
                        }
                        .ml-xl-0,
                        .mx-xl-0 {
                            margin-left: 0 !important;
                        }
                        .m-xl-1 {
                            margin: 0.25rem !important;
                        }
                        .mt-xl-1,
                        .my-xl-1 {
                            margin-top: 0.25rem !important;
                        }
                        .mr-xl-1,
                        .mx-xl-1 {
                            margin-right: 0.25rem !important;
                        }
                        .mb-xl-1,
                        .my-xl-1 {
                            margin-bottom: 0.25rem !important;
                        }
                        .ml-xl-1,
                        .mx-xl-1 {
                            margin-left: 0.25rem !important;
                        }
                        .m-xl-2 {
                            margin: 0.5rem !important;
                        }
                        .mt-xl-2,
                        .my-xl-2 {
                            margin-top: 0.5rem !important;
                        }
                        .mr-xl-2,
                        .mx-xl-2 {
                            margin-right: 0.5rem !important;
                        }
                        .mb-xl-2,
                        .my-xl-2 {
                            margin-bottom: 0.5rem !important;
                        }
                        .ml-xl-2,
                        .mx-xl-2 {
                            margin-left: 0.5rem !important;
                        }
                        .m-xl-3 {
                            margin: 1rem !important;
                        }
                        .mt-xl-3,
                        .my-xl-3 {
                            margin-top: 1rem !important;
                        }
                        .mr-xl-3,
                        .mx-xl-3 {
                            margin-right: 1rem !important;
                        }
                        .mb-xl-3,
                        .my-xl-3 {
                            margin-bottom: 1rem !important;
                        }
                        .ml-xl-3,
                        .mx-xl-3 {
                            margin-left: 1rem !important;
                        }
                        .m-xl-4 {
                            margin: 1.5rem !important;
                        }
                        .mt-xl-4,
                        .my-xl-4 {
                            margin-top: 1.5rem !important;
                        }
                        .mr-xl-4,
                        .mx-xl-4 {
                            margin-right: 1.5rem !important;
                        }
                        .mb-xl-4,
                        .my-xl-4 {
                            margin-bottom: 1.5rem !important;
                        }
                        .ml-xl-4,
                        .mx-xl-4 {
                            margin-left: 1.5rem !important;
                        }
                        .m-xl-5 {
                            margin: 3rem !important;
                        }
                        .mt-xl-5,
                        .my-xl-5 {
                            margin-top: 3rem !important;
                        }
                        .mr-xl-5,
                        .mx-xl-5 {
                            margin-right: 3rem !important;
                        }
                        .mb-xl-5,
                        .my-xl-5 {
                            margin-bottom: 3rem !important;
                        }
                        .ml-xl-5,
                        .mx-xl-5 {
                            margin-left: 3rem !important;
                        }
                        .p-xl-0 {
                            padding: 0 !important;
                        }
                        .pt-xl-0,
                        .py-xl-0 {
                            padding-top: 0 !important;
                        }
                        .pr-xl-0,
                        .px-xl-0 {
                            padding-right: 0 !important;
                        }
                        .pb-xl-0,
                        .py-xl-0 {
                            padding-bottom: 0 !important;
                        }
                        .pl-xl-0,
                        .px-xl-0 {
                            padding-left: 0 !important;
                        }
                        .p-xl-1 {
                            padding: 0.25rem !important;
                        }
                        .pt-xl-1,
                        .py-xl-1 {
                            padding-top: 0.25rem !important;
                        }
                        .pr-xl-1,
                        .px-xl-1 {
                            padding-right: 0.25rem !important;
                        }
                        .pb-xl-1,
                        .py-xl-1 {
                            padding-bottom: 0.25rem !important;
                        }
                        .pl-xl-1,
                        .px-xl-1 {
                            padding-left: 0.25rem !important;
                        }
                        .p-xl-2 {
                            padding: 0.5rem !important;
                        }
                        .pt-xl-2,
                        .py-xl-2 {
                            padding-top: 0.5rem !important;
                        }
                        .pr-xl-2,
                        .px-xl-2 {
                            padding-right: 0.5rem !important;
                        }
                        .pb-xl-2,
                        .py-xl-2 {
                            padding-bottom: 0.5rem !important;
                        }
                        .pl-xl-2,
                        .px-xl-2 {
                            padding-left: 0.5rem !important;
                        }
                        .p-xl-3 {
                            padding: 1rem !important;
                        }
                        .pt-xl-3,
                        .py-xl-3 {
                            padding-top: 1rem !important;
                        }
                        .pr-xl-3,
                        .px-xl-3 {
                            padding-right: 1rem !important;
                        }
                        .pb-xl-3,
                        .py-xl-3 {
                            padding-bottom: 1rem !important;
                        }
                        .pl-xl-3,
                        .px-xl-3 {
                            padding-left: 1rem !important;
                        }
                        .p-xl-4 {
                            padding: 1.5rem !important;
                        }
                        .pt-xl-4,
                        .py-xl-4 {
                            padding-top: 1.5rem !important;
                        }
                        .pr-xl-4,
                        .px-xl-4 {
                            padding-right: 1.5rem !important;
                        }
                        .pb-xl-4,
                        .py-xl-4 {
                            padding-bottom: 1.5rem !important;
                        }
                        .pl-xl-4,
                        .px-xl-4 {
                            padding-left: 1.5rem !important;
                        }
                        .p-xl-5 {
                            padding: 3rem !important;
                        }
                        .pt-xl-5,
                        .py-xl-5 {
                            padding-top: 3rem !important;
                        }
                        .pr-xl-5,
                        .px-xl-5 {
                            padding-right: 3rem !important;
                        }
                        .pb-xl-5,
                        .py-xl-5 {
                            padding-bottom: 3rem !important;
                        }
                        .pl-xl-5,
                        .px-xl-5 {
                            padding-left: 3rem !important;
                        }
                        .m-xl-auto {
                            margin: auto !important;
                        }
                        .mt-xl-auto,
                        .my-xl-auto {
                            margin-top: auto !important;
                        }
                        .mr-xl-auto,
                        .mx-xl-auto {
                            margin-right: auto !important;
                        }
                        .mb-xl-auto,
                        .my-xl-auto {
                            margin-bottom: auto !important;
                        }
                        .ml-xl-auto,
                        .mx-xl-auto {
                            margin-left: auto !important;
                        }
                    }

                    .d-none {
                        display: none !important;
                    }
                    .d-inline {
                        display: inline !important;
                    }
                    .d-inline-block {
                        display: inline-block !important;
                    }
                    .d-block {
                        display: block !important;
                    }
                    .d-table {
                        display: table !important;
                    }
                    .d-table-row {
                        display: table-row !important;
                    }
                    .d-table-cell {
                        display: table-cell !important;
                    }
                    .d-flex {
                        display: -ms-flexbox !important;
                        display: flex !important;
                    }
                    .d-inline-flex {
                        display: -ms-inline-flexbox !important;
                        display: inline-flex !important;
                    }
                    @media (min-width: 576px) {
                        .d-sm-none {
                            display: none !important;
                        }
                        .d-sm-inline {
                            display: inline !important;
                        }
                        .d-sm-inline-block {
                            display: inline-block !important;
                        }
                        .d-sm-block {
                            display: block !important;
                        }
                        .d-sm-table {
                            display: table !important;
                        }
                        .d-sm-table-row {
                            display: table-row !important;
                        }
                        .d-sm-table-cell {
                            display: table-cell !important;
                        }
                        .d-sm-flex {
                            display: -ms-flexbox !important;
                            display: flex !important;
                        }
                        .d-sm-inline-flex {
                            display: -ms-inline-flexbox !important;
                            display: inline-flex !important;
                        }
                    }
                    @media (min-width: 768px) {
                        .d-md-none {
                            display: none !important;
                        }
                        .d-md-inline {
                            display: inline !important;
                        }
                        .d-md-inline-block {
                            display: inline-block !important;
                        }
                        .d-md-block {
                            display: block !important;
                        }
                        .d-md-table {
                            display: table !important;
                        }
                        .d-md-table-row {
                            display: table-row !important;
                        }
                        .d-md-table-cell {
                            display: table-cell !important;
                        }
                        .d-md-flex {
                            display: -ms-flexbox !important;
                            display: flex !important;
                        }
                        .d-md-inline-flex {
                            display: -ms-inline-flexbox !important;
                            display: inline-flex !important;
                        }
                    }
                    @media (min-width: 992px) {
                        .d-lg-none {
                            display: none !important;
                        }
                        .d-lg-inline {
                            display: inline !important;
                        }
                        .d-lg-inline-block {
                            display: inline-block !important;
                        }
                        .d-lg-block {
                            display: block !important;
                        }
                        .d-lg-table {
                            display: table !important;
                        }
                        .d-lg-table-row {
                            display: table-row !important;
                        }
                        .d-lg-table-cell {
                            display: table-cell !important;
                        }
                        .d-lg-flex {
                            display: -ms-flexbox !important;
                            display: flex !important;
                        }
                        .d-lg-inline-flex {
                            display: -ms-inline-flexbox !important;
                            display: inline-flex !important;
                        }
                    }
                    @media (min-width: 1200px) {
                        .d-xl-none {
                            display: none !important;
                        }
                        .d-xl-inline {
                            display: inline !important;
                        }
                        .d-xl-inline-block {
                            display: inline-block !important;
                        }
                        .d-xl-block {
                            display: block !important;
                        }
                        .d-xl-table {
                            display: table !important;
                        }
                        .d-xl-table-row {
                            display: table-row !important;
                        }
                        .d-xl-table-cell {
                            display: table-cell !important;
                        }
                        .d-xl-flex {
                            display: -ms-flexbox !important;
                            display: flex !important;
                        }
                        .d-xl-inline-flex {
                            display: -ms-inline-flexbox !important;
                            display: inline-flex !important;
                        }
                    }
                    @media print {
                        .d-print-none {
                            display: none !important;
                        }
                        .d-print-inline {
                            display: inline !important;
                        }
                        .d-print-inline-block {
                            display: inline-block !important;
                        }
                        .d-print-block {
                            display: block !important;
                        }
                        .d-print-table {
                            display: table !important;
                        }
                        .d-print-table-row {
                            display: table-row !important;
                        }
                        .d-print-table-cell {
                            display: table-cell !important;
                        }
                        .d-print-flex {
                            display: -ms-flexbox !important;
                            display: flex !important;
                        }
                        .d-print-inline-flex {
                            display: -ms-inline-flexbox !important;
                            display: inline-flex !important;
                        }
                    }

                    .col,
                    .col-1,
                    .col-10,
                    .col-11,
                    .col-12,
                    .col-2,
                    .col-3,
                    .col-4,
                    .col-5,
                    .col-6,
                    .col-7,
                    .col-8,
                    .col-9,
                    .col-auto,
                    .col-lg,
                    .col-lg-1,
                    .col-lg-10,
                    .col-lg-11,
                    .col-lg-12,
                    .col-lg-2,
                    .col-lg-3,
                    .col-lg-4,
                    .col-lg-5,
                    .col-lg-6,
                    .col-lg-7,
                    .col-lg-8,
                    .col-lg-9,
                    .col-lg-auto,
                    .col-md,
                    .col-sm-1,
                    .col-sm-10,
                    .col-sm-11,
                    .col-sm-12,
                    .col-sm-2,
                    .col-sm-3,
                    .col-sm-4,
                    .col-sm-5,
                    .col-sm-6,
                    .col-sm-7,
                    .col-sm-8,
                    .col-sm-9,
                    .col-sm-auto,
                    .col-sm,
                    .col-sm-1,
                    .col-sm-10,
                    .col-sm-11,
                    .col-sm-12,
                    .col-sm-2,
                    .col-sm-3,
                    .col-sm-4,
                    .col-sm-5,
                    .col-sm-6,
                    .col-sm-7,
                    .col-sm-8,
                    .col-sm-9,
                    .col-sm-auto,
                    .col-xl,
                    .col-xl-1,
                    .col-xl-10,
                    .col-xl-11,
                    .col-xl-12,
                    .col-xl-2,
                    .col-xl-3,
                    .col-xl-4,
                    .col-xl-5,
                    .col-xl-6,
                    .col-xl-7,
                    .col-xl-8,
                    .col-xl-9,
                    .col-xl-auto {
                        position: relative;
                        /*width: 100%;*/
                        min-height: 1px;
                        padding-right: 15px;
                        padding-left: 15px;
                    }
                    .col {
                        -ms-flex-preferred-size: 0;
                        flex-basis: 0;
                        -webkit-box-flex: 1;
                        -ms-flex-positive: 1;
                        flex-grow: 1;
                        max-width: 100%;
                    }
                    .col-auto {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 auto;
                        flex: 0 0 auto;
                        width: auto;
                        max-width: none;
                    }
                    .col-1 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 8.333333%;
                        flex: 0 0 8.333333%;
                        max-width: 8.333333%;
                    }
                    .col-2 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 16.666667%;
                        flex: 0 0 16.666667%;
                        max-width: 16.666667%;
                    }
                    .col-3 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 25%;
                        flex: 0 0 25%;
                        max-width: 25%;
                    }
                    .col-4 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 33.333333%;
                        flex: 0 0 33.333333%;
                        max-width: 33.333333%;
                    }
                    .col-5 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 41.666667%;
                        flex: 0 0 41.666667%;
                        max-width: 41.666667%;
                    }
                    .col-6 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 50%;
                        flex: 0 0 50%;
                        max-width: 50%;
                    }
                    .col-7 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 58.333333%;
                        flex: 0 0 58.333333%;
                        max-width: 58.333333%;
                    }
                    .col-8 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 66.666667%;
                        flex: 0 0 66.666667%;
                        max-width: 66.666667%;
                    }
                    .col-9 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 75%;
                        flex: 0 0 75%;
                        max-width: 75%;
                    }
                    .col-10 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 83.333333%;
                        flex: 0 0 83.333333%;
                        max-width: 83.333333%;
                    }
                    .col-11 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 91.666667%;
                        flex: 0 0 91.666667%;
                        max-width: 91.666667%;
                    }
                    .col-12 {
                        -webkit-box-flex: 0;
                        -ms-flex: 0 0 100%;
                        flex: 0 0 100%;
                        max-width: 100%;
                    }

                    @media (min-width: 576px) {
                        .col-sm {
                            -ms-flex-preferred-size: 0;
                            flex-basis: 0;
                            -webkit-box-flex: 1;
                            -ms-flex-positive: 1;
                            flex-grow: 1;
                            max-width: 100%;
                        }
                        .col-sm-auto {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 auto;
                            flex: 0 0 auto;
                            width: auto;
                            max-width: none;
                        }
                        .col-sm-1 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 8.333333%;
                            flex: 0 0 8.333333%;
                            max-width: 8.333333%;
                        }
                        .col-sm-2 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 16.666667%;
                            flex: 0 0 16.666667%;
                            max-width: 16.666667%;
                        }
                        .col-sm-3 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 25%;
                            flex: 0 0 25%;
                            max-width: 25%;
                        }
                        .col-sm-4 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 33.333333%;
                            flex: 0 0 33.333333%;
                            max-width: 33.333333%;
                        }
                        .col-sm-5 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 41.666667%;
                            flex: 0 0 41.666667%;
                            max-width: 41.666667%;
                        }
                        .col-sm-6 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 50%;
                            flex: 0 0 50%;
                            max-width: 50%;
                        }
                        .col-sm-7 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 58.333333%;
                            flex: 0 0 58.333333%;
                            max-width: 58.333333%;
                        }
                        .col-sm-8 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 66.666667%;
                            flex: 0 0 66.666667%;
                            max-width: 66.666667%;
                        }
                        .col-sm-9 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 75%;
                            flex: 0 0 75%;
                            max-width: 75%;
                        }
                        .col-sm-10 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 83.333333%;
                            flex: 0 0 83.333333%;
                            max-width: 83.333333%;
                        }
                        .col-sm-11 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 91.666667%;
                            flex: 0 0 91.666667%;
                            max-width: 91.666667%;
                        }
                        .col-sm-12 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 100%;
                            flex: 0 0 100%;
                            max-width: 100%;
                        }
                        .order-sm-first {
                            -webkit-box-ordinal-group: 0;
                            -ms-flex-order: -1;
                            order: -1;
                        }
                        .order-sm-1 {
                            -webkit-box-ordinal-group: 2;
                            -ms-flex-order: 1;
                            order: 1;
                        }
                        .order-sm-2 {
                            -webkit-box-ordinal-group: 3;
                            -ms-flex-order: 2;
                            order: 2;
                        }
                        .order-sm-3 {
                            -webkit-box-ordinal-group: 4;
                            -ms-flex-order: 3;
                            order: 3;
                        }
                        .order-sm-4 {
                            -webkit-box-ordinal-group: 5;
                            -ms-flex-order: 4;
                            order: 4;
                        }
                        .order-sm-5 {
                            -webkit-box-ordinal-group: 6;
                            -ms-flex-order: 5;
                            order: 5;
                        }
                        .order-sm-6 {
                            -webkit-box-ordinal-group: 7;
                            -ms-flex-order: 6;
                            order: 6;
                        }
                        .order-sm-7 {
                            -webkit-box-ordinal-group: 8;
                            -ms-flex-order: 7;
                            order: 7;
                        }
                        .order-sm-8 {
                            -webkit-box-ordinal-group: 9;
                            -ms-flex-order: 8;
                            order: 8;
                        }
                        .order-sm-9 {
                            -webkit-box-ordinal-group: 10;
                            -ms-flex-order: 9;
                            order: 9;
                        }
                        .order-sm-10 {
                            -webkit-box-ordinal-group: 11;
                            -ms-flex-order: 10;
                            order: 10;
                        }
                        .order-sm-11 {
                            -webkit-box-ordinal-group: 12;
                            -ms-flex-order: 11;
                            order: 11;
                        }
                        .order-sm-12 {
                            -webkit-box-ordinal-group: 13;
                            -ms-flex-order: 12;
                            order: 12;
                        }
                        .offset-sm-0 {
                            margin-left: 0;
                        }
                        .offset-sm-1 {
                            margin-left: 8.333333%;
                        }
                        .offset-sm-2 {
                            margin-left: 16.666667%;
                        }
                        .offset-sm-3 {
                            margin-left: 25%;
                        }
                        .offset-sm-4 {
                            margin-left: 33.333333%;
                        }
                        .offset-sm-5 {
                            margin-left: 41.666667%;
                        }
                        .offset-sm-6 {
                            margin-left: 50%;
                        }
                        .offset-sm-7 {
                            margin-left: 58.333333%;
                        }
                        .offset-sm-8 {
                            margin-left: 66.666667%;
                        }
                        .offset-sm-9 {
                            margin-left: 75%;
                        }
                        .offset-sm-10 {
                            margin-left: 83.333333%;
                        }
                        .offset-sm-11 {
                            margin-left: 91.666667%;
                        }
                    }
                    @media (min-width: 1200px) {
                        .col-xl {
                            -ms-flex-preferred-size: 0;
                            flex-basis: 0;
                            -webkit-box-flex: 1;
                            -ms-flex-positive: 1;
                            flex-grow: 1;
                            max-width: 100%;
                        }
                        .col-xl-auto {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 auto;
                            flex: 0 0 auto;
                            width: auto;
                            max-width: none;
                        }
                        .col-xl-1 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 8.333333%;
                            flex: 0 0 8.333333%;
                            max-width: 8.333333%;
                        }
                        .col-xl-2 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 16.666667%;
                            flex: 0 0 16.666667%;
                            max-width: 16.666667%;
                        }
                        .col-xl-3 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 25%;
                            flex: 0 0 25%;
                            max-width: 25%;
                        }
                        .col-xl-4 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 33.333333%;
                            flex: 0 0 33.333333%;
                            max-width: 33.333333%;
                        }
                        .col-xl-5 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 41.666667%;
                            flex: 0 0 41.666667%;
                            max-width: 41.666667%;
                        }
                        .col-xl-6 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 50%;
                            flex: 0 0 50%;
                            max-width: 50%;
                        }
                        .col-xl-7 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 58.333333%;
                            flex: 0 0 58.333333%;
                            max-width: 58.333333%;
                        }
                        .col-xl-8 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 66.666667%;
                            flex: 0 0 66.666667%;
                            max-width: 66.666667%;
                        }
                        .col-xl-9 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 75%;
                            flex: 0 0 75%;
                            max-width: 75%;
                        }
                        .col-xl-10 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 83.333333%;
                            flex: 0 0 83.333333%;
                            max-width: 83.333333%;
                        }
                        .col-xl-11 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 91.666667%;
                            flex: 0 0 91.666667%;
                            max-width: 91.666667%;
                        }
                        .col-xl-12 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 100%;
                            flex: 0 0 100%;
                            max-width: 100%;
                        }
                        .order-xl-first {
                            -webkit-box-ordinal-group: 0;
                            -ms-flex-order: -1;
                            order: -1;
                        }
                        .order-xl-1 {
                            -webkit-box-ordinal-group: 2;
                            -ms-flex-order: 1;
                            order: 1;
                        }
                        .order-xl-2 {
                            -webkit-box-ordinal-group: 3;
                            -ms-flex-order: 2;
                            order: 2;
                        }
                        .order-xl-3 {
                            -webkit-box-ordinal-group: 4;
                            -ms-flex-order: 3;
                            order: 3;
                        }
                        .order-xl-4 {
                            -webkit-box-ordinal-group: 5;
                            -ms-flex-order: 4;
                            order: 4;
                        }
                        .order-xl-5 {
                            -webkit-box-ordinal-group: 6;
                            -ms-flex-order: 5;
                            order: 5;
                        }
                        .order-xl-6 {
                            -webkit-box-ordinal-group: 7;
                            -ms-flex-order: 6;
                            order: 6;
                        }
                        .order-xl-7 {
                            -webkit-box-ordinal-group: 8;
                            -ms-flex-order: 7;
                            order: 7;
                        }
                        .order-xl-8 {
                            -webkit-box-ordinal-group: 9;
                            -ms-flex-order: 8;
                            order: 8;
                        }
                        .order-xl-9 {
                            -webkit-box-ordinal-group: 10;
                            -ms-flex-order: 9;
                            order: 9;
                        }
                        .order-xl-10 {
                            -webkit-box-ordinal-group: 11;
                            -ms-flex-order: 10;
                            order: 10;
                        }
                        .order-xl-11 {
                            -webkit-box-ordinal-group: 12;
                            -ms-flex-order: 11;
                            order: 11;
                        }
                        .order-xl-12 {
                            -webkit-box-ordinal-group: 13;
                            -ms-flex-order: 12;
                            order: 12;
                        }
                        .offset-xl-0 {
                            margin-left: 0;
                        }
                        .offset-xl-1 {
                            margin-left: 8.333333%;
                        }
                        .offset-xl-2 {
                            margin-left: 16.666667%;
                        }
                        .offset-xl-3 {
                            margin-left: 25%;
                        }
                        .offset-xl-4 {
                            margin-left: 33.333333%;
                        }
                        .offset-xl-5 {
                            margin-left: 41.666667%;
                        }
                        .offset-xl-6 {
                            margin-left: 50%;
                        }
                        .offset-xl-7 {
                            margin-left: 58.333333%;
                        }
                        .offset-xl-8 {
                            margin-left: 66.666667%;
                        }
                        .offset-xl-9 {
                            margin-left: 75%;
                        }
                        .offset-xl-10 {
                            margin-left: 83.333333%;
                        }
                        .offset-xl-11 {
                            margin-left: 91.666667%;
                        }
                    }
               


                    .flex-wrap {
                        flex-wrap: wrap;
                    }

                    .align-self-center {
                        align-self: center;
                    }
                </style>
<style>
 .info.info-prod h2 {
    text-align: center;
    color: #ffffff;
    background-color: #70ac48;
}
 .w-100{
         width: 100%;
    display: block;
 }
 .disable {
    display:none;
}
 .button_hov {
  margin: 20px;
  outline: none;
}
.custom-btn_hov {
  width: 130px;
  height: 40px;
  padding: 10px 25px;
  border: 2px solid #000;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}

/* 12 */
.btn-12{
  position: relative;
  right: 20px;
  bottom: 20px;
  border:none;
  width: 130px;
  height: 40px;
  line-height: 40px;
  -webkit-perspective: 230px;
  perspective: 230px;
}
.btn-12 span {
  display: block;
  position: absolute;
  width: 220px;
  height: 40px;
  /*border: 2px solid #000;*/
  margin:0;
  top: 0;
    right: 0;
    background: #00c292;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.btn-12 span:nth-child(1) {
  box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  -webkit-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12 span:nth-child(2) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12:hover span:nth-child(1) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
.btn-12:hover span:nth-child(2) {
  background: #e0e5ec;
  color: #e0e5ec;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}

 
 
 
 
 
     .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #70ac4870;
}

@media (max-width: 1500px) {

.modal-body {
     max-width: 900px !important; 
    /*overflow-x: scroll !important; */
     margin: auto !important; 
}
.modal-dialog {
   width:800px !important;
}
}

@media (min-width: 1500.98px) {

.modal-dialog {
   width:1000px !important;
}
}
 </style>
<style>
.meta {
  position: absolute;
  right: 0;
  bottom: 0;
  background: #eee;
  padding: 1em;
  text-align: center;
  font-size: .7em;
}
            .web_bg {
                background-color: transparent;
            }
            .price_title {
                font-weight: 600;
                color: black;
                font-size: 25px;
            }
            .table-2 thead tr th {
                border-bottom: 0px;
                font-weight: 500;
                border-top: 1px solid #000 !important;
                text-align: center;
                padding: 2px;
                font-size: 13px;
                color: white;
            }
            .table-2 tbody tr td {
                text-align: center;
                padding: 2px;
                font-size: 13px;
            }
            .table-1 tbody tr td,
            .table-2 tbody tr td,
            .table-2 thead tr th {
                border: 1px solid #70ac48 !important;
                padding: 2px;
                font-size: 13px;
            }
            .unique-footer h6 {
               font-size: 16px;
            }
            .unique-footer p {
               font-size: 12px;
               font-weight: 500;
            }

            .max-footer-wid  p{
                font-size: 13px;
               font-weight: 700;
            }

            .footer-p a{
                color: #000;
            }
            .footer-p i{
                font-size: 18px;
            }
            .footer-p a{
                font-size: 13px;
                font-weight: 600;
            }

            .footer-pay{
                font-size: 18px;
                font-weight: 600;
                color: #235ec3;
            }
            
            
            .table.table-bordered.table-2 > tbody > tr > td, .table.table-1 > tbody > tr > td, {
    border: 1px solid #70ac48 !important;
                
            }
        </style>
<table id="data-table-basic" class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Date</th>
		<th>Enquiry Submited By</th>
		<th>Product</th>
		<th>Price</th>
	</thead>
	<tbody>
		<?php foreach($get_all_enquires as $key=>$value){ ?>
			<td><?php echo $value->id; ?></td>
			<td><?php echo date('Y, F j', $value->enquiry_date);?></td>
			<td>{{$value->csr_sudo_name}}</td>
			<td>
				<button type="button" data-id="{{$value->id}}" class="btn btn-success notika-btn-success get-product-info-view">Products Info</button>
			</td>
			<td>
				<form class="inline" action="{{url('submit-urgent-price-request')}}" method="post">
					@csrf
					<input type="text" name="price" class="form-control">
					<input type="hidden" name="id" value="<?php echo $value->id; ?>">
					<button type="submit" class="btn btn-success notika-btn-success">Submit</button>
				</form>
			</td>
		<?php } ?>
	</tbody>
</table>
<div class="modal fade view-email-doc" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    </div>


<div class="modal fade get-product-info-view-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    </div>
@include('footer')