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
                        width: 100%;
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
        
<div class="form-element-area">
    <div class="container-fluid">
        	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>My TL Inquiries</h2>
									 
									</div>
								
								</div>
							</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp" style="float:right">
								    <?php  if(Session::get('desgniation')=='tl'){?> 
									<div class="breadcomb-ctn">
									  <a href="{{url('own-sales-enquiry')}}"> <button class="custom-btn_hov btn-12 button_hov"><span>Click</span><span>My own Sales Enquiries</span></button>	</a>
									 
									</div>
									<?php } ?>
								
								</div>
							</div>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
	   @if(Session::has('del_sales'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('del_sales') }}</div>
                    </center>
      @endif
      
         @if(Session::has('status_change_est_sender'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('status_change_est_sender') }}</div>
                    </center>
      @endif
      
      
          @if(Session::has('folow_up'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('folow_up') }}</div>
                    </center>
      @endif
      
      
      
        
          @if(Session::has('price_quote'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('price_quote') }}</div>
                    </center>
      @endif
      
      
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                             </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped" style=" border-collapse: collapse;  border-spacing: 0;  width: 100%;  border: 1px solid #ddd;">
                                
                              <!--   <table id="emptableid" class="" style="width:100%;"> -->
                                <thead>
                                    <tr style="background-color: #393b3c;">
                                        <th style="color: white;">ID</th>
                                          <th style="color: white;">Date</th>
                                          <th style="color: white;">Client Name</th>
                                          <th style="color: white;">Client Email</th>
                                          <th style="color: white;">Website</th>
                                              <th style="color: white;">Inquiry Submited By:</th>
                                          <th style="color: white;">Product</th>
                                          <th style="color: white;">Inquiry Status</th>
                                           <th style="color: white;">Manage Inquiry</th>
                                        <th class="text-center" style="color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                
                                
                          <?php  if(Session::get('desgniation')=='csr'){?>       
                        
                        
                        @foreach($getrow as $value)
                             <tr>
                                        <td>{{$value->id}}</td>
                                         <td><?php echo date('Y, F j',($value->enquiry_data));?></td>
                                        <td>{{$value->c_name}}</td>
                                        <td>{{$value->c_email}}</td>
                                          <td>{{$value->website}}</td>
                                          <td>{{$value->csr_sudo_name}}</td>
                                          <td>  
                                              <div class="form-example-int">
    <!-- <button type="button" style="height:55px;" data-toggle="modal" data-target="#exampleModal"  data-product="{{$value->product}}"  data-quantity="{{$value->qty}}" data-price="{{$value->price}}" data-stock="{{$value->stock}}" data-size="{{$value->open_size_1}}" data-id="{{$value->id}}" data-finish="{{$value->f_s_1}}"   data-printing="{{$value->printing}}" value="" class="addAttr modaldatabtn btn-success notika-btn-success px-sm-4 btn-sm" > Product Info</button> -->
    <button type="button" data-id="{{$value->id}}" class="btn btn-success notika-btn-success get-product-info-view">Products Info</button>
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"    role="document">
    <div class="modal-content" >
      <div class="modal-header">
          <center>
                                               <div class="info info-prod  py-0 mb-4 print" >
                    <h2 class="py-3">Product Information </h2>
                
                    
                    <!-- <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i> -->
                </div>
              
          </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
                                  <table class="table">
                                    <thead class="thead-dark">
    <tr class="info pro-tr-info my-sm-5">
        <th scope="col" class="bg-color-td">
            ID
        </th>
        <th scope="col" class="bg-color-td">
            Product
        </th>
      
    </tr>
</thead>
                                      <tbody>
    <tr>
        <td class="bg-color-td-2">
            <input type="text" id="id" name="id" readonly class="input-bg" />
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="product" name="product" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                   <table class="table">
                                    <thead class="thead-dark">
  <th scope="col" class="bg-color-td">
            Printing
        </th>
        <th scope="col" class="bg-color-td">
            Finish Size
        </th>
</thead>
                                      <tbody>
    <tr>
       <td class="bg-color-td-2">
            <input type="text" id="printing" name="printing" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="finish" name="finish" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                  <table class="table">
                                    <thead class="thead-dark">
  <th scope="col" class="bg-color-td">
            Open Size
        </th>
        <th scope="col" class="bg-color-td">
            Stock
        </th>
</thead>
                                      <tbody>
    <tr>
       <td class="bg-color-td-2">
            <input type="text" id="size" name="size" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="stock" name="stock" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                  <table class="table">
                                    <thead class="thead-dark">
        <th scope="col" class="bg-color-td">
            Quantity
        </th>
        <th scope="col" class="bg-color-td">
            Price
        </th>
</thead>
                                      <tbody>
    <tr>
           <td class="bg-color-td-2">
            <input type="text" id="quantity" name="quantity" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="price" name="price" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
                                    
                                    </div>
                                          </td>
                                    
                                    <?php   if($value->manage_inquiry==1){ ?>  
                                    
                                    <td>
                                        <button style="background-color: #00c292;border: 1px solid #00c292;">Proceed</button>
                                    </td>
                                    
                                    
                                    <?php } else if($value->inq_status==0){?>
                                    
                                     <td>
                                        <button style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;">Sent to the EST</button>
                                    </td>
                                    <?php } else if($value->price_offerd_by_sales_manager_status== 0){?>
                                    <td>
                                        <button style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;">Waiting for SM Aproval </button>
                                    </td>
                                    
                                    <?php }  else if($value->price_offerd_by_sales_manager_status== 1){?>
                                    <td>
     <button type="button"  style=" width: 100%;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Ready  Price Quote
</button>

<!-- Modal -->
<!--<div >
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document"  >
      <input type="button" class="btn_print" value="PDF">
    <div class="modal-content" id="container_content">
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLongTitle"> <div class="price_title info pro-tr-info ">
                    <h2 class="text-center text-uppercase font-weight-bold mb-0" >Price Quote</h2>
                </div></h5>
                <div id="editor"></div>
                
                
 

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="">
            <div class="div" style="border: 1px solid #000;">
                <div class="web_bg text-center py-2">
                    <img src="{{url('images/cplogo.png')}}" alt="" />
                </div>
                
                <div class="my-4"></div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="mb-5 pl-2">
                            <h6 class="font-weight-bold">Address:</h6>
                            <span class="d-block pl-sm-2" style="font-size: 14px;">
                                Office 1358, Level 13, <br class="d-dm-block" />
                                135king Street Sydney 200 NSW.<br class="d-dm-block" />
                                Phone: (02) 7208-6015
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <table class="table table-bordered table-1">
                            <tbody>
                               <tr class="info pro-tr-info">
                                    <td class="font-weight-bold">Quote No#</td>
                                    <td>154885</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Date:</td>
                                    <td>24-01-2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="">
                <table class="table table-bordered table-2 mb-0 border-bottom-0 example11" id="myTable" align="center">
                    <thead bgColor="" class="web_bg">
                     <tr class="info pro-tr-info">
                            <th scope="col">Sales Person</th>
                            <th scope="col">Shipping Method</th>
                            <th scope="col">Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>davis_elton</td>
                            <td>DHL/FEDEX</td>
                            <td>UPFRONT</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="">
                <table class="table table-bordered table-2 mb-0 border-bottom-0" align="center">
                    <thead bgColor="" class="web_bg">
                         <tr class="info pro-tr-info">
                            <th scope="col">Item#</th>
                            <th scope="col">Size</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Box Style</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Unit Price (AUD)</th>
                            <th scope="col">Line Total (AUD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td height="400px">1</td>
                            <td height="400px">11 in x 8 x 4 in</td>
                            <td height="400px">Rigid</td>
                            <td height="400px">Collapsible Rigid Boxes</td>
                            <td height="400px">100</td>
                            <td height="400px">$25.71</td>
                            <td height="400px">$257.43</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="">
                <table class="table table-bordered table-2 border-bottom-0" align="center">
                    <thead bgColor="" class="web_bg">
                       <tr class="info pro-tr-info" height="20px">
                            <th scope="col" height="25px"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="mb-5 pl-2" style="border: 1px solid #000;">
                   <div class="mb-5 unique-footer ">
                         <h6 class="mb-5 pb-5 pt-4 font-weight-bold"> Additional  Commments</h6>
                   </div>

                    <div class="mb-1 unique-footer">
                            <h6 class=" font-weight-bold"> 1. Artwork Requirement: </h6>
                            <p>  File Format Supported- EPS, PDF, AI, PSD, CDR  <br class="d-dm-block" /> Resolution- Min 300dpi</p>
                    </div>

                    <div class="mb-1 unique-footer">
                        <h6 class=" font-weight-bold"> 2. Lead Time </h6>
                        <p>  Standard (10 to 12 Business Days) <br class="d-dm-block" />
                            Rush (6 to 8 Business Days) <br class="d-dm-block" />
                        </p>
                   </div>

                   <div class="mb-1 unique-footer">
                        <h6 class=" font-weight-bold">  3.No Hidden Or Setup Charges. </h6>
                        <p> </p>
                   </div>
                   <div class="max-footer-wid text-center">
                         <h3 class=" font-weight-bold" style="color: #70ac48;"> Thank You </h3>
                         <p class="">
                             If You Have Any Questions Or Require Further Assistance, Please Contact Our Customer Service Team <br class="d-dm-block" />
                            Between 8.00am-7.00pm CST, Monday-Friday
                        </p>
                   </div>
                   <div class=" text-center">
                           <div class="row">
                                <div class="col-sm-4"><p class="text-black footer-p"><i class="fas fa-globe-americas"></i> Phone: (02) 7208-6015 </p></div>
                                <div class="col-sm-4"><p class="text-black footer-p"><i class="fa ">@</i> <a class="text-black" href="">support@customprintedboxes.com.au</a></p></div>
                                <div class="col-sm-4"><p class="text-black footer-p"><i class="fa fa-phone"></i> <a class="text-black" href="">www.customprintedboxes.com.au</a> </p></div>
                             </div>
                            <div class="row mb-5">
                                 <div class="col-sm-4">
                                    <p class="text-black footer-pay" style="color: #70ac48;"> Payment Terms:    </p>
                                </div>
                                <div class="col-sm-1"> </div>
                                <div class="col-sm-4"> <img src="https://www.thepremiumboxes.com/dist/images_box/payment_ft.png" alt="" /></div>
                                <div class="col-sm-3"> <img src="https://printcustompackaging.com/web/images/blue-seal-250-52-blacktxt-bbb-88655540.png" alt="" /></div>
                            </div>
                   </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>-->
                                    </td>
                                    
                                    <?php } 
                                    else if($value->follow_up_status== 1){?>
                                    <td>
                                        <button type="button" style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;"  badge="<?php echo $value->follow_up_increment?>" class="btn btn-primary"> Follow Up <span ></span> </button>
                                        
                                       
                                    </td>
                                    
                                    <?php }  
                                    
                                    
                                    else { ?>
                                    
                                        <td><div class="form-example-int">
                                      
    <?php  $now = $value->date; $daysToAdd = 8 ;?>
<?php $sd = Carbon\Carbon::parse($now)->addDays($daysToAdd); ?>
<?php $days_count = Carbon\Carbon::parse()->diffInDays($sd); ?>
  <?php if($days_count == 0) {?>
 <button type="submit" name="submit" class="btn btn-success notika-btn-success px-sm-4" style="background-color:orange;">Time Out</button>
                         
                         <?php } else if($sd > $now){?>
                        <button type="submit" name="submit" class="btn btn-success notika-btn-success px-sm-4"><?php echo $days_count?> Days Left</button>
                         <?php } else if($sd < $now) {?>
                         <button type="submit" name="submit" class="btn btn-success notika-btn-success px-sm-4">Red</button>
                         <?php } ?>
                            <?php  $a = date('Y',strtotime($value->date));?>
                                         <?php echo $a?>
                                          <?php  $b = date('F',strtotime($value->date));?>
                                          <?php echo $b?>
                                           <?php  $c = date('j',strtotime($value->date));?>
                                           <?php echo $c?>
                                    </div>
                                    <a href="{{url('time-increase-csr'.'/'.$value->id)}}" class="@if($value->time_increment == 1)<?php echo"disable"?>@endif">
    
                                     <button class="btn btn-success notika-btn-success px-sm-4 waves-effect @if($value->time_increment == 1) <?php echo "disable" ?> @endif">Increase Time</button>
    
                                    </a>
                                    </td>
                                 <?php   }?> 
                                 
                                    <td>
                                   
                                      <select name="manage" class="onchange" id="EventStartTimeMin" style="width: 127px;height: 40px">
                                      <option value="ss">Select Option</option>
                                      
                                          <option value="proceed" data-id="{{$value->id}}">Order Proceed</option>
                                    
                                      
                                      <option value="client">Client Toch</option>
                                      <option value="follow" data-id="{{$value->id}}">Follow Up</option>
                                       <option value="est" data-id="{{$value->id}}"> Send Inquiry to EST</option>
                                           <?php if($value->price_offerd_by_sales_manager_status== 1){ ?>
                              
                              <option value="price" data-id="{{$value->id}}"> Send Price Quote</option>
                              
                              
                       <?php   } ?>
                                    </select>
                                    
                                 
                                    </td>
                                        <td class="text-center">
                                            
                                                <!-- <button class="btn viewdata" data-toggle="tooltip" data-placement="bottom" title="View" data-uid="<?php echo $value->id; ?>">
                                                    <i class="notika-icon notika-eye"></i>
                                                </button> -->
                                            
                                             <?php
                                             
                                             if(Session::get('user_name_login')=='admin' || Session::get('desgniation')=='tl' || Session::get('desgniation')=='sm'|| Session::get('desgniation')=='csr'){?>
                                                 
                                            <!--      <button class="btn editdata" data-toggle="tooltip" data-placement="bottom" title="Edit" data-uid="<?php echo $value->id; ?>">-->
                                            <!--    <i class="notika-icon notika-edit">-->
                                                    
                                            <!--    </i>-->
                                            <!--</button>-->
                                            
                                                <a href="{{url('edit-inquiry'.'/'.$value->id)}}" title="Edit" class="delete" 
                                               onclick="return confirm('Are you sure you want to View this Form ?')">

                                                  <button class="btn " data-toggle="tooltip" data-placement="bottom" title="Edit" data-uid="<?php echo $value->id; ?>">
                                                <i class="notika-icon notika-edit">
                                                    
                                                </i>
                                            </button>
                                              </a>
                                              
                                                  <a href="{{url('delete_enquiry/'.$value->id)}}" title="delete" class="delete" 
   onclick="return confirm('Are you sure you want to delete this item')">
          <button
                          class="btn"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="delete"
                          
                        >
                          <i class="notika-icon notika-close"> </i>
                      </button>
                         
</a>
                                                 
                                                 
                                            <?php }
                                             
                                             ?>
                                           
                                           
                                        </td>
                                       
                                    </tr>
                     @endforeach
                          <?php }  else if(Session::get('desgniation')=='tl'){ ?>

                    <?php $temp=json_decode($getrow[0]->csr); ?>
                      <?php $tl_id=$getrow[0]->tl;?>
                          <?php foreach ($get_all_enquires as $value): ?> 
                         
                          <?php foreach ($temp as $value1): ?> 
                          <?php   if($value1==$value->csr_name){?>
                           
                                <tr>
                      <td>{{$value->id}}</td>
                      <td>
                      <?php echo date('Y, F j',($value->enquiry_date));?>
                      </td>
                      <td>{{$value->c_name}}</td>
                      <td>{{$value->c_email}}</td>
                      <td>{{$value->website}}</td>
                        <td>{{$value->csr_sudo_name}}</td>
                      <td>
                        <div class="form-example-int">
                          <!-- <button
                            type="button"
                            data-toggle="modal"
                            data-target="#exampleModal"
                            data-product="{{$value->product}}"
                            data-quantity="{{$value->qty}}"
                            data-price="{{$value->price}}"
                            data-stock="{{$value->stock}}"
                            data-size="{{$value->open_size_1}}"
                            data-id="{{$value->id}}"
                            data-finish="{{$value->f_s_1}}"
                            data-printing="{{$value->printing}}"
                            value=""
                            class="
                              addAttr
                              modaldatabtn
                              btn-success
                              notika-btn-success
                              px-sm-4
                              btn-sm
                            "
                          >
                            Product Info
                          </button> -->
                          <button type="button" data-id="{{$value->id}}" class="btn btn-success notika-btn-success get-product-info-view">Products Info</button>
                          <div
                            class="modal fade"
                            id="exampleModal"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                          >
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <center>
                                   <div class="info info-prod  py-0 mb-4 print" >
                                                        <div class="info info-prod  py-0 mb-4 print" >
                    <h2 class="py-3">Product Information </h2>
                
                    
                    <!-- <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i> -->
                </div>
                
                    
                    <!-- <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i> -->
                </div>
                                  </center>
                                  <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                  >
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                              <div class="modal-body">
                              <table class="table">
                                <thead class="thead-dark">
<tr class="info pro-tr-info my-sm-5">
    <th scope="col" class="bg-color-td">
        ID
    </th>
    <th scope="col" class="bg-color-td">
        Product
    </th>
  
</tr>
</thead>
                                  <tbody>
<tr>
    <td class="bg-color-td-2">
        <input type="text" id="id" name="id" readonly class="input-bg" />
    </td>
    <td class="bg-color-td-2">
        <input type="text" id="product" name="product" readonly class="input-bg"/>
    </td>

</tr>
</tbody>

                              </table>
                              <table class="table">
                                <thead class="thead-dark">
<th scope="col" class="bg-color-td">
        Printing
    </th>
    <th scope="col" class="bg-color-td">
        Finish Size
    </th>
</thead>
                                  <tbody>
<tr>
   <td class="bg-color-td-2">
        <input type="text" id="printing" name="printing" readonly class="input-bg"/>
    </td>
    <td class="bg-color-td-2">
        <input type="text" id="finish" name="finish" readonly class="input-bg"/>
    </td>

</tr>
</tbody>

                              </table>
                              
                              <table class="table">
                                <thead class="thead-dark">
<th scope="col" class="bg-color-td">
        Open Size
    </th>
    <th scope="col" class="bg-color-td">
        Stock
    </th>
</thead>
                                  <tbody>
<tr>
   <td class="bg-color-td-2">
        <input type="text" id="size" name="size" readonly class="input-bg"/>
    </td>
    <td class="bg-color-td-2">
        <input type="text" id="stock" name="stock" readonly class="input-bg"/>
    </td>

</tr>
</tbody>

                              </table>
                              
                              <table class="table">
                                <thead class="thead-dark">
    <th scope="col" class="bg-color-td">
        Quantity
    </th>
    <th scope="col" class="bg-color-td">
        Price
    </th>
</thead>
                                  <tbody>
<tr>
       <td class="bg-color-td-2">
        <input type="text" id="quantity" name="quantity" readonly class="input-bg"/>
    </td>
    <td class="bg-color-td-2">
        <input type="text" id="price" name="price" readonly class="input-bg"/>
    </td>

</tr>
</tbody>

                              </table>
                              </div>

                                <div class="modal-footer">
                                  <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                  >
                                    Close
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <?php   if($value->manage_inquiry==1){ ?>

                      <td>
                        <button
                          style="
                            background-color: #00c292;
                            border: 1px solid #00c292;
                          "
                        >
                          Proceed
                        </button>
                      </td>

                      <?php } else if($value->inq_status==0){?>
                                    
                                     <td>
                                        <button style="width: 100px;
    height: 56px; background-color: #00c292;border: 1px solid #00c292;">Sent to the EST</button>
                                    </td>
                                    
                                    <?php } else if($value->price_offerd_by_sales_manager_status== 0){?>
                                    <td>
                                        <button style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;">Waiting for SM Aproval </button>
                                    </td>
                                    
                                    <?php } else if($value->price_offerd_by_sales_manager_status== 1){?>
                                    <td>
                                           <button type="button" style=" width: 100%;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Ready Price Quote
</button>

<!-- Modal -->
 
                                    </td>
                                    
                                    <?php }   else{ ?>

                      <td>
                        <div class="form-example-int">
                          <?php  $now = $value->date; $daysToAdd = 8 ;?>
                          <?php $sd = Carbon\Carbon::parse($now)->addDays($daysToAdd);
                          ?>
                          <?php $days_count = Carbon\Carbon::parse()->diffInDays($sd);
                          ?>
                          <?php if($days_count == 0) {?>
                          <button
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                            style="background-color: orange"
                          >
                            Time Out
                          </button>

                          <?php } else if($sd >
                          $now){?>
                          <button
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                          >
                            <?php echo $days_count?>
                            Days Left
                          </button>
                          <?php } else if($sd < $now) {?>
                          <button
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                          >
                            Red
                          </button>
                          <?php } ?>
                          <?php  $a = date('Y',strtotime($value->date));?>
                          <?php echo $a?>
                          <?php  $b = date('F',strtotime($value->date));?>
                          <?php echo $b?>
                          <?php  $c = date('j',strtotime($value->date));?>
                          <?php echo $c?>
                        </div>
                      </td>
                      <?php   }?>

                      <td>
                        <select
                          name="manage"
                          class="onchange"
                          id="EventStartTimeMin"
                          style="width: 127px; height: 40px"
                        >
                          <option value="ss">Select Option</option>

                          <option value="proceed" data-id="{{$value->id}}">
                            Order Proceed
                          </option>

                          <option value="client">Client Toch</option>
                          <option value="follow" data-id="{{$value->id}}">Follow Up</option>
                          <option value="est" data-id="{{$value->id}}"> Send Inquiry to EST</option>
                              <?php if($value->price_offerd_by_sales_manager_status== 1){ ?>
                              
                              <option value="price" data-id="{{$value->id}}"> Send Price Quote</option>
                              
                              
                       <?php   } ?>
                        </select>
                      </td>
                      <td class="text-center">
                        <!-- <button
                          class="btn viewdata"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="View"
                          data-uid="<?php echo $value->id; ?>"
                        >
                          <i class="notika-icon notika-eye"></i>
                        </button> -->

                        <?php
                                             
                                            if(Session::get('user_name_login')=='admin' || Session::get('desgniation')=='tl' || Session::get('desgniation')=='sm'|| Session::get('desgniation')=='csr'){?>

                                    <a href="{{url('edit-inquiry'.'/'.$value->id)}}" title="Edit" class="delete" 
                                               onclick="return confirm('Are you sure you want to View this Form ?')">

                                                  <button class="btn " data-toggle="tooltip" data-placement="bottom" title="Edit" data-uid="<?php echo $value->id; ?>">
                                                <i class="notika-icon notika-edit">
                                                    
                                                </i>
                                            </button>
                                              </a>

                         <a href="{{url('delete_enquiry/'.$value->id)}}" title="delete" class="delete" 
   onclick="return confirm('Are you sure you want to delete this item')">
          <button
                          class="btn"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="delete"
                          
                        >
                          <i class="notika-icon notika-close"> </i>
                      </button>
                         
</a>

                        <?php }
                                             
                                             ?>
                      </td>
                    </tr>
                    
                                <?php  }  ?>
                                <?php endforeach ; ?>
                               
                              <?php endforeach ; ?>
                              <?php  } else if(Session::get('desgniation')=='sm'){?>
                                <?php foreach ($get_all_enquires as $value): ?> 
                              <tr>
                      <td>{{$value->id}}</td>
                      <td>
                        <?php echo date('Y, F j',($value->enquiry_date));?>
                      </td>
                      <td>{{$value->c_name}}</td>
                      <td>{{$value->c_email}}</td>
                      <td>{{$value->website}}</td>
                       <td>{{$value->csr_sudo_name}}</td>
                      <td>
                        <div class="form-example-int">
                          <!-- <button
                            type="button"
                            data-toggle="modal"
                            data-target="#exampleModal"
                            data-product="{{$value->product}}"
                            data-quantity="{{$value->qty}}"
                            data-price="{{$value->price}}"
                            data-stock="{{$value->stock}}"
                            data-size="{{$value->open_size_1}}"
                            data-id="{{$value->id}}"
                            data-finish="{{$value->f_s_1}}"
                            data-printing="{{$value->printing}}"
                            value=""
                            class="
                              addAttr
                              modaldatabtn
                              btn-success
                              notika-btn-success
                              px-sm-4
                            "
                          >
                            Product Info
                          </button> -->
                          <button type="button" data-id="{{$value->id}}" class="btn btn-success notika-btn-success get-product-info-view">Products Info</button>
                          <div
                            class="modal fade"
                            id="exampleModal"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                          >
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <center>
                        <div class="info info-prod  py-0 mb-4 print" >
                    <h2 class="py-3">Product Information </h2>
                
                    
                    <!-- <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i> -->
                </div>
                                  </center>
                                  <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                  >
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <table class="table">
                                    <thead class="thead-dark">
    <tr class="info pro-tr-info my-sm-5">
        <th scope="col" class="bg-color-td">
            ID
        </th>
        <th scope="col" class="bg-color-td">
            Product
        </th>
      
    </tr>
</thead>
                                      <tbody>
    <tr>
        <td class="bg-color-td-2">
            <input type="text" id="id" name="id" readonly class="input-bg" />
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="product" name="product" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                   <table class="table">
                                    <thead class="thead-dark">
  <th scope="col" class="bg-color-td">
            Printing
        </th>
        <th scope="col" class="bg-color-td">
            Finish Size
        </th>
</thead>
                                      <tbody>
    <tr>
       <td class="bg-color-td-2">
            <input type="text" id="printing" name="printing" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="finish" name="finish" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                  <table class="table">
                                    <thead class="thead-dark">
  <th scope="col" class="bg-color-td">
            Open Size
        </th>
        <th scope="col" class="bg-color-td">
            Stock
        </th>
</thead>
                                      <tbody>
    <tr>
       <td class="bg-color-td-2">
            <input type="text" id="size" name="size" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="stock" name="stock" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                  <table class="table">
                                    <thead class="thead-dark">
        <th scope="col" class="bg-color-td">
            Quantity
        </th>
        <th scope="col" class="bg-color-td">
            Price
        </th>
</thead>
                                      <tbody>
    <tr>
           <td class="bg-color-td-2">
            <input type="text" id="quantity" name="quantity" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="price" name="price" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                </div>
                                <div class="modal-footer">
                                  <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                  >
                                    Close
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <?php   if($value->manage_inquiry==1){ ?>

                      <td>
                        <button
                          style="
                            background-color: #00c292;
                            border: 1px solid #00c292;
                          "
                        >
                          Proceed
                        </button>
                      </td>

                      <?php } else if($value->inq_status==0){?>
                                    
                                     <td>
                                        <button style="width: 100px;
    height: 56px; background-color: #00c292;border: 1px solid #00c292;">Sent to the EST</button>
                                    </td>
                                    
                                    <?php }  else if($value->price_offerd_by_sales_manager_status== 0){?>
                                    <td>
                                        <button style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;">Waiting for SM Aproval </button>
                                    </td>
                                    
                                    <?php }   else if($value->price_offerd_by_sales_manager_status== 1){?>
                                    <td>
                                            <button type="button" style=" width: 100%;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Ready Price Quote
</button>

 

                                    </td>
                                    
                                    <?php }   else if($value->follow_up_status== 1){?>
                                    <td>
                                        <button type="button" style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;" badge="<?php echo $value->follow_up_increment?>" class="btn btn-primary"> Follow Up <span ></span> </button>
                                    </td>
                                    
                                    <?php }   else{ ?>

                      <td>
                        
                       <table>
                           <tbody>
                               <tr>
                                   <td class="d-block w-100">
                                       <div class="form-example-int">
                          <?php  $now = $value->date; $daysToAdd = 8 ;?>
                          <?php $sd = Carbon\Carbon::parse($now)->addDays($daysToAdd);
                          ?>
                          <?php $days_count = Carbon\Carbon::parse()->diffInDays($sd);
                          ?>
                          <?php if($days_count == 0) {?>
                          <button
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                            style="background-color: orange"
                          >
                            Time Out
                          </button>

                          <?php } else if($sd >
                          $now){?>
                          <button style="font-size: 12px;"
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                          >
                            <?php echo $days_count?>
                            Days Left
                          </button>
                          <br>
                          <?php } else if($sd < $now) {?>
                          <button style="font-size: 12px;"
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                          >
                            Red
                          </button>
                          
                          <?php } ?>
                          <?php  $a = date('Y',strtotime($value->date));?>
                          <?php echo $a?>
                          <?php  $b = date('F',strtotime($value->date));?>
                          <?php echo $b?>
                          <?php  $c = date('j',strtotime($value->date));?>
                          <?php echo $c?>
                        </div>
                                   </td>
                                    <?php  if(Session::get('desgniation')=='sm') {?> 
                                   <td class="d-block w-100" >
    <a href="{{url('time-increase-sm'.'/'.$value->id)}}" class="@if($value->time_increment == 1)<?php echo"disable"?>@endif">
    
                                     <button class="btn btn-success notika-btn-success px-sm-4 waves-effect @if($value->time_increment == 1) <?php echo "disable" ?> @endif">Increase Time</button>
    
                                    </a>
                                   </td>
                                   <?php  } ?>
                               </tr>
                           </tbody>
                       </table>
                      </td>
                      <?php   }?>

                      <td>
                        <select
                          name="manage"
                          class="onchange"
                          id="EventStartTimeMin"
                          style="width: 127px; height: 40px"
                        >
                          <option value="ss">Select Option</option>

                          <option value="proceed" data-id="{{$value->id}}">
                            Order Proceed
                          </option>

                          <option value="client">Client Toch</option>
                          <option value="follow" data-id="{{$value->id}}">Follow Up</option>
                          <option value="est" data-id="{{$value->id}}"> Send Inquiry to EST</option>
                              <?php if($value->price_offerd_by_sales_manager_status== 1){ ?>
                              
                              <option value="price" data-id="{{$value->id}}"> Send Price Quote</option>
                              
                              
                       <?php   } ?>
                        </select>
                      </td>
                      <td class="text-center">
                        <!-- <button
                          class="btn viewdata"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="View"
                          data-uid="<?php echo $value->id; ?>"
                        >
                          <i class="notika-icon notika-eye"></i>
                        </button> -->

                        <?php
                                             
                                             if(Session::get('user_name_login')=='admin' || Session::get('desgniation')=='tl' || Session::get('desgniation')=='sm'|| Session::get('desgniation')=='csr'){?>

                                     <a href="{{url('edit-inquiry'.'/'.$value->id)}}" title="Edit" class="delete" 
                                               onclick="return confirm('Are you sure you want to View this Form ?')">

                                                  <button class="btn " data-toggle="tooltip" data-placement="bottom" title="Edit" data-uid="<?php echo $value->id; ?>">
                                                <i class="notika-icon notika-edit">
                                                    
                                                </i>
                                            </button>
                                              </a>

                         <a href="{{url('delete_enquiry/'.$value->id)}}" title="delete" class="delete" 
   onclick="return confirm('Are you sure you want to delete this item')">
          <button
                          class="btn"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="delete"
                          
                        >
                          <i class="notika-icon notika-close"> </i>
                      </button>
                         
</a>

                        <?php }
                                             
                                             ?>
                      </td>
                    </tr>
                                <?php endforeach ; ?>
                              <?php  }  else{?>
                                <?php foreach ($get_all_enquires as $value): ?> 
                              <tr>
                      <td>{{$value->id}}</td>
                      <td>
                         <?php echo date('Y, F j',($value->enquiry_date));?>
                      </td>
                      <td>{{$value->c_name}}</td>
                      <td>{{$value->c_email}}</td>
                      <td>{{$value->website}}</td>
                       <td>{{$value->csr_sudo_name}}</td>
                      <td>
                        <div class="form-example-int">
                          <!-- <button
                            type="button"
                            data-toggle="modal"
                            data-target="#exampleModal"
                            data-product="{{$value->product}}"
                            data-quantity="{{$value->qty}}"
                            data-price="{{$value->price}}"
                            data-stock="{{$value->stock}}"
                            data-size="{{$value->open_size_1}}"
                            data-id="{{$value->id}}"
                            data-finish="{{$value->f_s_1}}"
                            data-printing="{{$value->printing}}"
                            value=""
                            class="
                              addAttr
                              modaldatabtn
                              btn-success
                              notika-btn-success
                              px-sm-4
                            "
                          >
                            Product Info
                          </button> -->
                          <button type="button" data-id="{{$value->id}}" class="btn btn-success notika-btn-success get-product-info-view">Products Info</button>
                          <div
                            class="modal fade"
                            id="exampleModal"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                          >
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <center>
                                    <div class="info info-prod  py-0 mb-4 print" >
                    <h2 class="py-3">Product Information </h2>
                
                    
                    <!-- <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i> -->
                </div>
                                  </center>
                                  <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                  >
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <table class="table">
                                    <thead class="thead-dark">
    <tr class="info pro-tr-info my-sm-5">
        <th scope="col" class="bg-color-td">
            ID
        </th>
        <th scope="col" class="bg-color-td">
            Product
        </th>
      
    </tr>
</thead>
                                      <tbody>
    <tr>
        <td class="bg-color-td-2">
            <input type="text" id="id" name="id" readonly class="input-bg" />
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="product" name="product" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                   <table class="table">
                                    <thead class="thead-dark">
  <th scope="col" class="bg-color-td">
            Printing
        </th>
        <th scope="col" class="bg-color-td">
            Finish Size
        </th>
</thead>
                                      <tbody>
    <tr>
       <td class="bg-color-td-2">
            <input type="text" id="printing" name="printing" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="finish" name="finish" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                  <table class="table">
                                    <thead class="thead-dark">
  <th scope="col" class="bg-color-td">
            Open Size
        </th>
        <th scope="col" class="bg-color-td">
            Stock
        </th>
</thead>
                                      <tbody>
    <tr>
       <td class="bg-color-td-2">
            <input type="text" id="size" name="size" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="stock" name="stock" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                  
                                  <table class="table">
                                    <thead class="thead-dark">
        <th scope="col" class="bg-color-td">
            Quantity
        </th>
        <th scope="col" class="bg-color-td">
            Price
        </th>
</thead>
                                      <tbody>
    <tr>
           <td class="bg-color-td-2">
            <input type="text" id="quantity" name="quantity" readonly class="input-bg"/>
        </td>
        <td class="bg-color-td-2">
            <input type="text" id="price" name="price" readonly class="input-bg"/>
        </td>
 
    </tr>
</tbody>

                                  </table>
                                </div>
                                <div class="modal-footer">
                                  <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                  >
                                    Close
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <?php   if($value->manage_inquiry==1){ ?>

                      <td>
                        <button
                          style="
                            background-color: #00c292;
                            border: 1px solid #00c292;
                          "
                        >
                          Proceed
                        </button>
                      </td>

                      <?php }  else if($value->inq_status==0){?>
                                    
                                     <td>
                                        <button style="width: 100px;
    height: 56px; background-color: #00c292;border: 1px solid #00c292;">Sent to the EST</button>
                                    </td>
                                    
                                    <?php } else if($value->price_offerd_by_sales_manager_status== 0){?>
                                    <td>
                                        <button style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;">Waiting for SM Aproval </button>
                                    </td>
                                    
                                    <?php }  else if($value->price_offerd_by_sales_manager_status== 1){?>
                                    <td>
                                        <button style=" width: 100%;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Ready Price Quote
</button>
 
                                    </td>
                                    
                                    <?php } 
                                     else if($value->follow_up_status== 1){?>
                                    <td>
                                        <button type="button" badge="<?php echo $value->follow_up_increment?>" style=" width: 100px;
    height: 56px;background-color: #00c292;border: 1px solid #00c292;" class="btn btn-primary "> Follow Up <span ></span> </button>
                                    </td>
                                    
                                    <?php }  
                                    else{ ?>

                      <td>
                        
                       <table>
                           <tbody>
                               <tr style="background-color:transparent;">
                                   <td class="d-block w-100">
                                       <div class="form-example-int">
                          <?php  $now = $value->date; $daysToAdd = 8 ;?>
                          <?php $sd = Carbon\Carbon::parse($now)->addDays($daysToAdd);
                          ?>
                          <?php $days_count = Carbon\Carbon::parse()->diffInDays($sd);
                          ?>
                          <?php if($days_count == 0) {?>
                          <button
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                            style="background-color: orange"
                          >
                            Time Out
                          </button>

                          <?php } else if($sd >
                          $now){?>
                          <button style="font-size: 12px;"
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                          >
                            <?php echo $days_count?>
                            Days Left
                          </button>
                          <br>
                          <?php } else if($sd < $now) {?>
                          <button style="font-size: 12px;"
                            type="submit"
                            name="submit"
                            class="btn btn-success notika-btn-success px-sm-4"
                          >
                            Red
                          </button>
                          
                          <?php } ?>
                          <?php  $a = date('Y',strtotime($value->date));?>
                          <?php echo $a?>
                          <?php  $b = date('F',strtotime($value->date));?>
                          <?php echo $b?>
                          <?php  $c = date('j',strtotime($value->date));?>
                          <?php echo $c?>
                        </div>
                                   </td>
                                    <?php  if(Session::get('user_name_login')=='admin') {?> 
                                   <td class="d-block w-100" >
<form action="{{url('admin/time-update'.'/'.$value->id)}}"  method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input type="number" name="increment" style="width: 135px" required/>
    </div>
    <div class="form-group">
    <button class="btn btn-success notika-btn-success px-sm-4 waves-effect" style="padding: 0px 5px 0px 5px;font-size: 12px;" type="submit">Increment Time</button>
    </div>
</form>
                                   </td>
                                   <?php  } ?>
                               </tr>
                           </tbody>
                       </table>
                      </td>
                      <?php   }?>

                      <td>
                        <select name="manage"  class="onchange"  id="EventStartTimeMin"  style="width: 127px; height: 40px" >
                          <option value="ss">Select Option</option>

                          <option value="proceed" data-id="{{$value->id}}">
                            Order Proceed
                          </option>

                          <option value="client">Client Toch</option>
                          <option value="follow" data-id="{{$value->id}}">Follow Up</option>
                          <option value="est" data-id="{{$value->id}}"> Send Inquiry to EST</option>
                          
                <?php if($value->price_offerd_by_sales_manager_status== 1){ ?>
                              
                              <option value="price" data-id="{{$value->id}}"> Send Price Quote</option>
                              
                              
                       <?php   } ?>
                        </select>
                      </td>
                      <td class="text-center" style="width:100% !important;">
                           
                      

 

                    
                        
                     <table>
                         <tbody>
                             <tr style="background-color:transparent;">
                                 <td>
                                        <a href="{{url('view-inquiry/'.$value->id)}}" title="delete" class="delete" 
   onclick="return confirm('Are you sure you want to View this Inquiry')">
          <button
                          class="btn"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="Edit"
                          
                        >
                          <i class="notika-icon notika-eye"> </i>
                      </button>
                         
</a>
                                 </td>
                                 <?php
                                             
                                              if(Session::get('user_name_login')=='admin' || Session::get('desgniation')=='tl'){?>
                                 <td>
                                      <a href="{{url('edit-inquiry/'.$value->id)}}" title="delete" class="delete" 
   onclick="return confirm('Are you sure you want to Edit this Inquiry')">
          <button
                          class="btn"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="Edit"
                          
                        >
                          <i class="notika-icon notika-edit"> </i>
                      </button>
                         
</a>
                                 </td>
                                 <td>
                                         


                      
   <a href="{{url('delete_enquiry/'.$value->id)}}" title="delete" class="delete" 
   onclick="return confirm('Are you sure you want to delete this item')">
          <button
                          class="btn"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title="delete"
                          
                        >
                          <i class="notika-icon notika-close"> </i>
                      </button>
                         
</a>
                     
                                 </td>
                                    <?php }  ?>
                             </tr>
                         </tbody>
                     </table>
                      </td>
                    </tr>
                                <?php endforeach ; ?>
                              <?php  }?>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
  
        </div>
    </div>


    <div class="modal fade view-email-doc" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    </div>
    <div class="modal fade get-product-info-view-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    </div>

    @include('footer')
    
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script type="text/javascript">
      $(document).ready(function($) {
        $(document).on('click','.btn_print',function(event){
           event.preventDefault(); 
           var element=document.getElementById('container_content');
           //html2pdf().from(element).save();
           
           var opt=
            {
              margin:   1,
              filename:  'page_Content_'+js.AutoCode()+'.pdf',
              image:  { type:'jpeg', quality: 0.98 },
              html2canvas:  { scale: 2 },
              jsPDF: { unit:'in', format:'letter', orientation:'portrait' }
          };
            
          
         // html2pdf(element, opt);
           html2pdf().set(opt).from(element).save();
            
        });
});
      
      </script>
    
    
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <script>
      var doc = new jsPDF(); // create new jsPDF() function
var specialElementHandlers = { 
  '#editor': function(element, renderer) { // this is where the specific content of our PDF will be rendered
    return true;
  }
};

$('.download').click(function() { // upon clicking the download button, perform the following function
 
  doc.fromHTML(
    $('.content').html() // take HTML from the .content section
  , 15 // margin from the left
  , 15 // margin from the top
  , { 
    'width': 170, // max width of content in PDF
    'elementHandlers': specialElementHandlers // include are handler from above
  });
  doc.save('content.pdf'); // save pdf to a file with name content.pdf
});


// meta
var getUrl = window.location.host;
if (window.location.host != "s.codepen.io") {
  document.querySelector(".meta").style.display = "none";
}
  </script>
  -->
  
  
 <script>
   $('select').on('change', function() {
  if(this.value=="est"){
       var selectedid = $(this).find(':selected').attr('data-id');
        $src = "{{url('status_change_est_sender/')}}"+'/'+selectedid;
        swal.fire({

            title: "Are you Sure you want to Send  this Inquire to Estimator ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
            
        });
      
  }
  else if(this.value=="proceed"){
      
       var selectedid = $(this).find(':selected').attr('data-id');
          $src = "{{url('proceed-inquiry/')}}"+'/'+selectedid;
         swal.fire({

            title: "Are you Sure you want to Proceed this Inquire ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
            
        });
  }
  
    else if(this.value=="follow"){
      
       var selectedid = $(this).find(':selected').attr('data-id');
          $src = "{{url('follow_inquiry/')}}"+'/'+selectedid;
         swal.fire({

            title: "Are you Sure you want to Follow this Inquire ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
            
        });
  }
  
  
   else if(this.value=="price"){
      
       var selectedid = $(this).find(':selected').attr('data-id');
          $src = "{{url('price_send_to_customer/')}}"+'/'+selectedid;
         swal.fire({

            title: "Are you Sure you want to Send Price to Customer ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
            
        });
  }
  
  
  
  
});
      
    </script>
    
    
  <script>
  $('.addAttr').click(function() {
   var id = $(this).data('id');   
   var printing = $(this).data('printing'); 
     var size = $(this).data('size'); 
   var finish = $(this).data('finish'); 
      var quantity = $(this).data('quantity'); 
   var price = $(this).data('price'); 
      var stock = $(this).data('stock'); 
     var product = $(this).data('product'); 
   
    $('#price').val(price);
       $('#product').val(product);
     $('#id').val(id);
   $('#finish').val(finish);
     $('#stock').val(stock);
    $('#size').val(size);
   $('#printing').val(printing); 
   $('#price').val(price); 
   $('#quantity').val(quantity);
  
   
  } );
 </script>
 
 
 
     <script type="text/javascript">
     $(document).ready(function () {
     $('.viewdata').click(function(){
     
     $product_id=$(this).attr('data-uid');
     console.log($product_id);
    $src = "{{url('view-inquiry/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "you want to View this Inquiry Info ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
     });

      });
      
      
      
      
      

      $('.deleteButton').click(function(){
     
     $product_id=$(this).attr('data-uid');
     console.log($product_id);
    $src = "{{url('delete_enquiry/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "Are You Sure, you want to Delete this Enquiry  ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            confirmButtonColor: '#A10C1A'
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
     });

      });

          $('.editdata').click(function(){
          
          $id=$(this).attr('data-uid');
          $src = "{{url('edit-inquiry')}}"+'/'+$id;
           console.log($id);
           swal.fire({

title:"Are you Sure you want to Edit this Inquiry ",
type:"warning",
showCancelButton:true,
confirmButtonText:'next',

           }).then((ok)=>{
            if(ok.value){

                window.location=$src;
            }
             else
             {
                console.log("error");
             }

          });
    });  
  });


 </script>