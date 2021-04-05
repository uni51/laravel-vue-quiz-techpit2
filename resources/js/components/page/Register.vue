<template>
    <div>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">ユーザー登録</div>

                            <div class="panel-body">
                                <form
                                    class="form-horizontal"
                                    ref="observer"
                                    action="/register"
                                    id="register"
                                    method="post"
                                    tag="form"
                                >
                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label">名前</label>

                                        <div class="col-md-6">
                                            <input v-model="name" name="name" type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">メールアドレス</label>

                                        <div class="col-md-6">
                                            <input v-model="email" name="email" type="email" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-md-4 control-label">パスワード</label>

                                        <div class="col-md-6">
                                            <input
                                                v-model="password"
                                                name="password"
                                                type="password"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">パスワード再確認</label>

                                        <div class="col-md-6">
                                            <input
                                                v-model="password_confirmation"
                                                name="password_confirmation"
                                                type="password"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">登録</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            email: "",
            password: "",
            password_confirmation: ""
        };
    }
};
</script>
